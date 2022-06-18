<div class="style-3">
    <!-- module 3 -->
    <input type="date" class="date" id="date" name="date" value="<?php echo date("Y-m-d"); ?>" />
    <!-- module 3 -->
</div>
<script>
    const date = document.getElementById("date");
    date.addEventListener("change", () => window.location.replace(`http://127.0.0.1:8000/games/date?date=${date.value}`));
</script>