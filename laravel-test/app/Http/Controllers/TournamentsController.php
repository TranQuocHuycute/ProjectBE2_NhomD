<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Tournaments;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Date;

class TournamentsController extends Controller
{
    public function update()
    {
        // get all categories
        $categories = Categories::get();

        // update
        foreach ($categories as $key => $value) {

            // get Tournaments by id with api
            $url = 'https://api.sofascore.com/api/v1/category/' . $value->cid . '/unique-tournaments';
            $data = file_get_contents($url);
            $data = json_decode($data);

            foreach ($data->groups[0]->uniqueTournaments as $index => $category) {
                $tournaments = new Tournaments();
                $tournaments->tid = $category->id;
                $tournaments->name = $category->name;
                $tournaments->slug = $category->slug;
                $tournaments->category = $value->cid; //id categori
                $tournaments->save();
            }
        }

        // send mail
        SendMailController::sendMail('Tournaments updated seccsessfully !');

        return redirect()->route('admin')->with(['message' => 'Tournaments updated seccsessfully !']);
    }

    // xoá tất cả
    public function deleteAll()
    {
        Tournaments::truncate();

        // send mail
        SendMailController::sendMail('Tournaments all deleted seccsessfully !');

        return redirect()->route('admin')->with(['message' => 'Tournaments all deleted seccsessfully !']);
    }

    // xoá một giải đấu
    public function delete(Request $request)
    {
        $tournaments = Tournaments::find($request->id);
        $tournaments->delete();

        // send mail
        SendMailController::sendMail('Tournaments deleted seccsessfully !');

        return redirect()->route('admin')->with(['message' => 'Tournaments deleted seccsessfully !']);
    }

    // thêm giải đấu
    public function add(Request $request)
    {
        $tournaments = new Tournaments();
        $date = new DateTime();
        $tournaments->tid = $date->getTimestamp();
        $tournaments->name = $request->name;
        $tournaments->slug = $request->name;
        $tournaments->category = $request->cid; //id categori
        $tournaments->save();

        // send mail
        SendMailController::sendMail('Tournaments add seccsessfully !');

        return redirect()->route('admin')->with(['message' => "Tournaments add seccsessfully !"]);
    }

    // chi tiết giải đấu
    public function seclect(Request $request)
    {
        $tournaments = Tournaments::find($request->id);
        return redirect()->route('admin')->with(['message' => 'Tournaments add seccsessfully !', 'tournaments' => $tournaments]);
    }

    public function edit(Request $request)
    {
        $tournaments = Tournaments::find($request->id);
        $date = new DateTime();
        $tournaments->tid = $date->getTimestamp();
        $tournaments->name = $request->name;
        $tournaments->slug = $request->name;
        $tournaments->category = $request->cid; //id categori
        $tournaments->version = $request->version + 1; //id categori

        $tournaments->update();

        // send mail
        SendMailController::sendMail('Tournaments edit seccsessfully !');

        return redirect()->route('admin')->with(['message' => "Tournaments edit seccsessfully !"]);
    }
}
