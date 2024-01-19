<h2 class="ct">訂單清單</h2>
<div class="qdel">
    快速刪除:
    <input type="radio" name="type" id="type" value="1" checked>依日期
    <input type="text" name="date" id="date" >
    <input type="radio" name="type" id="" value="2">依電影
    <select name="movie" id="movie">
    <?php
    $movies=$Order->q("select `movie` from `orders` Group by `movie`");
    foreach($movies as $movie){
        echo "<option value='{$movie['movie']}'>{$movie['movie']}</option>";
    }
    
    ?>
    <button type="button">刪除</button>
    </select> 
</div>
