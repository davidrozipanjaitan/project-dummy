<!DOCTYPE html>

<html>
    <head>
        <title>Laravel Dependent Dropdown Example with demo</title>        
        <link rel="stylesheet" href="http://demo.itsolutionstuff.com/plugin/bootstrap-3.min.css">
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    </head>
    
    <body>
        <div class="container">
            <div class="panel panel-default">
                <div class="panel-heading">Select State and get bellow Related City</div>
                <div class="panel-body">
                    <div class="form-group">
                        <label for="title">Select Region:</label>
                        <select name="region" class="form-control" style="width:350px">
                            <option value="">--- Select Region ---</option>
                            @foreach ($regions as $key => $value)
                            <option value="{{ $key }}">{{ $value }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="title">Select Country:</label>
                        <select name="country" class="form-control" style="width:350px">
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <script type="text/javascript">
        $(document).ready(function () {
            $('select name="region"').on('change', function () {
                var countryID = 3;
                if (countryID) {
                    $.ajax({
                        url: '/myform/ajax/'+countryID,
                        type: "GET",
                        dataType: "json",

                        success: function (data) {

                            $('select name="country"').empty();
                            $.each(data, function (key, value) {
                                $('select[name="country"]').append('<option value="' + key + '">' + value + '</option>');
                            });
                        }
                    });

                } else {
                    $('select[name="country"]').empty();
                }
            });
        });

        </script>
    </body>
</html>