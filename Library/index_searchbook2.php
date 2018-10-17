<!doctype html>
<html lang="en">
  <head>
    <title>Easy Search</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Favicon -->
    <link rel="shortcut icon" href="#" type="image/x-icon">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="src/css/bootstrap.min.css">

    <!-- Google Fonts CSS -->
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="src/css/style.css">

  </head>
  <body>
      <div class="container mt-3">
          <div class="form-group row">
              <label class="col-sm-2 col-form-label">คำที่ต้องการค้นหา :</label>
              <div class="col-sm-5">
                  <input class="form-control" name="kw" type="text" id="search_box" value="" placeholder="ชื่อหนังสือ,ชื่อผู้แต่ง,หมวดหมู่"> 
              </div>
          </div>
      </div>
      <script>
            $(function(){   // เรียกใช้ตอนโหลดหน้าเสร็จ
                $("#search_box").keyup(function(){          // ถ้ามี keyup ที่ input  ID = searchbox
                    //alert('OG');
                    if($(this).val().length>3){     //  ถ้าค่าใน searchbox ยาวกว่า 3
                        alert($(this).val());
                        $.post("search.php",{key:$(this).val()},function(result){   ///  ส่งค่าไปที่  search.php แบบ post  ตัวแปร key เก็บค่า searchbox
                            $("#resultDiv").html(result);   // เอาค่าที่ส่งกลับมา แสดงที่ element ที่มี id = resultDiv
                        })
                        }else{
                            return false;   // ถ้าค่าใน searchbox น้อยกว่า 3  ไม่ต้องทำไร
                        }
                })
            })
        </script>
  </body>
</html>