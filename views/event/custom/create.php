<section id="register-box">
    <h1>Create Your Event Here</h1>
    <form method="post" action="/index.php?r=event-custom/create-post">
        <div class="box-wrapper">
            <label>Title</label>
            <input id="title" name="title" placeholder="input your title.." />
            <?php $err_data != null ? print($err_data[0]) : print(null) ?>
        </div>
        <div class="box-wrapper">
            <label>Excerpt</label>
            <input id="excerpt" name="excerpt" placeholder="input your excerpt.." />
            <?php $err_data != null ? print($err_data[1]) : print(null) ?>
        </div>
        <div class="box-wrapper">
            <label>description</label>
            <textarea id="description" name="description" placeholder="input your description.." ></textarea>
            <?php $err_data != null ? print($err_data[2]) : print(null) ?>
        </div>
        <div class="box-wrapper">
            <label>Date From</label>
            <input id="date_from" name="date_from" placeholder="input your date_from.." type="date" />
            <?php $err_data != null ? print($err_data[1]) : print(null) ?>
        </div>
        <div class="box-wrapper">
            <label>Date To</label>
            <input id="date_to" name="date_to" placeholder="input your date_to.." type="date" />
            <?php $err_data != null ? print($err_data[1]) : print(null) ?>
        </div>
        <button type="submit">Submit</button>
    </form>
</section>