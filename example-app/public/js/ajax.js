const productPhoto = document.querySelectorAll('.productphoto');
productPhoto.forEach(element => {
    element.addEventListener('click', (e) => {
        console.log(e.target.dataset.productId)
        getProductDetail(e.target.dataset.productId);
    })
});

async function getProductDetail(productId) {
    console.log(productId);

    // Bước 1: Chuẩn bị url , data , gọi fetch gửi yêu cầu lên server
    const url = `./api/product/${productId}`;
    const response = await fetch(url);

    //Bước 2: đọc kq trả về
    const result = await response.json();
    // spiner.classList.add('d-none');
    console.log(result);
    //Bước 3 : Hiển thị lên giao diện

}
