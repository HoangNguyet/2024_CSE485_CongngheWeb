<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.s.css">
    <script src="https://cdn.ckeditor.com/ckeditor5/41.1.0/classic/ckeditor.js"></script>
    <title>Form</title>
</head>
<body>
<form>
    <div class="nav1">
        <h4>Basic Info</h4>
    </div>
    <?php
        $nav2 = ['Employee', 'Last Name', 'First Name', 'Gender', 'Title', 'Suffix', 'BirthDate', 'SSN # (if applicable)', 'Reports To'];
//        $nav2input = ['9', 'Dodsworth', 'Anne', 'Sale Repre']
        $radio = ['Male', 'Female', 'xxx', 'zzz']
    ?>
    <div class="nav2">
        <?php foreach ($nav2 as $nav): ?>
            <div class="row">
                <?php if($nav == 'Gender'): ?>
                    <label class="label"><?php echo $nav ?></label>
                    <div class="radio">
                        <?php foreach ($radio as $country): ?>
                            <div>
                                <input class="input" type="radio">
                                <label><?php echo $country?></label>
                            </div>
                        <?php endforeach; ?>
                    </div>
                <?php elseif($nav == "Reports To"): ?>
                    <label class="label">Report To</label>
                    <select class="select">
                        <option>
                            Buchanan
                        </option>
                        <option>
                            Busan
                        </option>
                    </select>
                <?php else: ?>
                    <label class="label"><?php echo $nav ?></label>
                    <input class="input" type="text" value="">
                <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="nav1">
        <h4>Contact Info</h4>
    </div>
    <?php
        $nav3 = ['Email', 'Address', 'City', 'Region', 'Postal Code', 'Country', 'US Home Phone', 'Photo'];
        $country = ['VietNam', 'Japan', 'England', 'Korea', 'Thailand'];
        ?>
    <div class="nav3">
        <?php foreach ($nav3 as $nav): ?>
            <div class="row">
                <?php if($nav == 'Country'): ?>
                    <label class="label"><?php echo $nav ?></label>
                    <select class="select">
                        <?php foreach ($country as $country): ?>
                            <option><?php echo  $country?></option>
                        <?php endforeach; ?>
                    </select>
                <?php else: ?>
                    <label class="label"><?php echo $nav ?></label>
                    <input class="input" type="text" value="">
            <?php endif; ?>
            </div>
        <?php endforeach; ?>
    </div>
    <?php
    $checkbox = ['Regular', 'Gravy Yard'];
    ?>
    <div class="nav1">
        <h4>Optional Info</h4>
    </div>
    <div class="row">
        <label class="label">Notes</label>
        <div id="editor">This is some sample content.</div>
        <script>
            ClassicEditor
                .create( document.querySelector( '#editor' ) )
                .then( editor => {
                    console.log( editor );
                } )
                .catch( error => {
                    console.error( error );
                } );
        </script>
    </div>
    <div class="row">
            <label class="label">Preferred Shift</label>
            <div class="checkbox">
                <?php foreach ($checkbox as $checkbox): ?>
                    <div>
                        <input class="input" type="checkbox">
                        <label><?php echo $checkbox?></label>
                    </div>
                <?php endforeach; ?>
            </div>
    </div>
    <div class="row">
        <label class="label">Active?</label>
        <div class="checkbox">
        <input class="input" type="checkbox">
        </div>
    </div>
    <div class="row">
        <label class="label">Are you human?</label>
        <input class="input" value="click to change">
    </div>
    <div class="nav1">
        <h4></h4>
    </div>
    <div class="row">
        <div class="left">

        </div>
        <div class="right">
            <button class="button">Submit</button>
            <button class="button">Cancel</button>
        </div>
    </div>
</form>
</body>
</html>