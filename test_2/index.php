<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>Customer Support System</title>

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/bootstrap-theme.css">

<script src="js/jquery-2.2.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="function.js"></script>
<style>
    .center{width:300px; margin:0 auto;}
    .padbig{padding-top:200px;}
    .pad30{padding-top:30px;}
</style>
<script type="text/javascript">
jQuery(function($){
    $('#form1 button[name=push]').on('click', function(){
        var url = $('#form1 input[name=url]').val();
        magic_function(url);

        return false;
    });
    $('#form2 button[name=push]').on('click', function(){
        var url = $('#form2 input[name=url]').val();
        magic_function(url);

        return false;
    });

    $('#form3 button[name=push]').on('click', function(){
        var url = $('#form3 input[name=url]').val();
        magic_function(url);

        return false;
    });
});
</script>
</head>
<body>

<div class="center padbig">
    <form id="form1">
        <div class="form-group">
            <label for="url">Url</label>
            <input type="text" class="form-control" name="url" value="http://localhost:8080/test_2/hello.php" disabled>
        </div>
        <button type="button" class="btn btn-default" name="push">Submit</button>
    </form>
</div>

<div class="center pad30">
    <form id="form2">
        <div class="form-group">
            <label for="url">Url</label>
            <input type="text" class="form-control" name="url" value="http://localhost:8080/test_2/yes.php" disabled>
        </div>
        <button type="button" class="btn btn-default" name="push">Submit</button>
    </form>
</div>

<div class="center pad30">
    <form id="form3">
        <div class="form-group">
            <label for="url">Url</label>
            <input type="text" class="form-control" name="url" value="XXXXX/strange_url" disabled>
        </div>
        <button type="button" class="btn btn-default" name="push">Submit</button>
    </form>
</div>

<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
            </div>
            <div class="modal-body">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

</body>
</html>