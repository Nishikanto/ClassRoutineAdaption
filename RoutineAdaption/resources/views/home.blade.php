
<!DOCTYPE html>
<?php
$time = array('8','9','10','11','12','13','14','15','16','17');

function getData($time, $day, $year, $sem) {
  return $data = DB::table('routines')
            ->join('courses', 'routines.course_id', '=', 'courses.id')
            ->select('routines.id', 'routines.start_time', 'routines.end_time', 'courses.title')
            ->where('start_time', $time)
            ->where('day', $day)
            ->where('year', $year)
            ->where('semester', $sem)
            ->first();
}
?>


<html lang="{{ config('app.locale') }}">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Creating a School Timetable - jQuery EasyUI Demo</title>
    <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="http://www.jeasyui.com/easyui/demo/demo.css">
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript" src="http://code.jquery.com/jquery-1.6.1.min.js"></script>
    <script type="text/javascript" src="http://www.jeasyui.com/easyui/jquery.easyui.min.js"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>

</head>
<body>



  <nav class="navbar navbar-default navbar-static-top">
      <div class="container">
          <div class="navbar-header">

              <!-- Collapsed Hamburger -->
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                  <span class="sr-only">Toggle Navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>

              <!-- Branding Image -->
              <a class="navbar-brand" href="{{ url('/') }}">
                  {{ config('app.name', 'Laravel') }}
              </a>
          </div>

          <div class="collapse navbar-collapse" id="app-navbar-collapse">
              <!-- Left Side Of Navbar -->
              <ul class="nav navbar-nav">
                  &nbsp;
              </ul>

              <!-- Right Side Of Navbar -->
              <ul class="nav navbar-nav navbar-right">
                  <!-- Authentication Links -->
                  @if (Auth::guest())
                      <li><a href="{{ route('login') }}">Login</a></li>
                      <li><a href="{{ route('register') }}">Register</a></li>
                  @else
                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              {{ Auth::user()->name }} <span class="caret"></span>
                          </a>

                          <ul class="dropdown-menu" role="menu">
                              <li>
                                  <a href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                      Logout
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      {{ csrf_field() }}
                                  </form>
                              </li>
                          </ul>
                      </li>
                  @endif
              </ul>
          </div>
      </div>
  </nav>



<center>
  <h2>2012 Batch Class Schidule</h2>
  <div class="demo-info" style="margin-bottom:10px">
      <div class="demo-tip icon-tip">&nbsp;</div>
      <div>Click and drag a class to change time table.</div>
  </div>
<div style="width:100%; ">
    <div class="right">
        <table>
            <tr>
                <td class="blank"></td>
                <td class="title">8 AM</td>
                <td class="title">9 AM</td>
                <td class="title">10 AM</td>
                <td class="title">11 AM</td>
                <td class="title">12 PM</td>
                <td class="title">1  PM</td>
                <td class="title">2  PM</td>
                <td class="title">3  PM</td>
                <td class="title">4  PM</td>
                <td class="title">5  PM</td>
            </tr>
            <tr>
                <td class="time">Sunday</td>
                <?php
                $i = 0;
                while($i<10){
                  $data = getData($time[$i], 'Sunday', '2012', '8');
                  if($i!=5){
                    if($data!=null){
                      $dif = abs($data->start_time - $data->end_time);
                      $row = "<td colspan = ".$dif."><div data-user=".$data->id." class=\"item assigned\">".$data->title."</div></td>";
                      $i = $i + $dif;
                    }
                    else{
                      $row = "<td class=\"drop\"></td>";
                      $i = $i +1;
                    }
                    echo $row;
                  } else {
                    echo "<td class=\"lunch\">Lunch</td>";
                    $i = $i +1;
                  }
                }
                ?>
            </tr>
            <tr>
              <td class="time">Monday</td>
              <?php
              $i = 0;
              while($i<10){
                $data = getData($time[$i], 'Monday', '2012', '8');
                if($i!=5){
                  if($data!=null){
                    $dif = abs($data->start_time - $data->end_time);
                    $row = "<td colspan = ".$dif."><div data-user=".$data->id." class=\"item assigned\">".$data->title."</div></td>";
                    $i = $i + $dif;
                  }
                  else{
                    $row = "<td class=\"drop\"></td>";
                    $i = $i +1;
                  }
                  echo $row;
                } else {
                  echo "<td class=\"lunch\">Lunch</td>";
                  $i = $i +1;
                }
              }
              ?>
            </tr>
            <tr>
              <td class="time">Tuesday</td>
              <?php
              $i = 0;
              while($i<10){
                $data = getData($time[$i], 'Tuesday', '2012', '8');
                if($i!=5){
                  if($data!=null){
                    $dif = abs($data->start_time - $data->end_time);
                    $row = "<td colspan = ".$dif."><div data-user=".$data->id." class=\"item assigned\">".$data->title."</div></td>";
                    $i = $i + $dif;
                  }
                  else{
                    $row = "<td class=\"drop\"></td>";
                    $i = $i +1;
                  }
                  echo $row;
                } else {
                  echo "<td class=\"lunch\">Lunch</td>";
                  $i = $i +1;
                }
              }
              ?>
            </tr>
            <tr>
              <td class="time">Wednesday</td>
              <?php
              $i = 0;
              while($i<10){
                $data = getData($time[$i], 'Wednesday', '2012', '8');
                if($i!=5){
                  if($data!=null){
                    $dif = abs($data->start_time - $data->end_time);
                    $row = "<td colspan = ".$dif."><div data-user=".$data->id." class=\"item assigned\">".$data->title."</div></td>";
                    $i = $i + $dif;
                  }
                  else{
                    $row = "<td class=\"drop\"></td>";
                    $i = $i +1;
                  }
                  echo $row;
                } else {
                  echo "<td class=\"lunch\">Lunch</td>";
                  $i = $i +1;
                }
              }
              ?>
            </tr>
            <tr>
              <td class="time">Thrusday</td>
              <?php
              $i = 0;
              while($i<10){
                $data = getData($time[$i], 'Thrusday', '2012', '8');
                if($i!=5){
                  if($data!=null){
                    $dif = abs($data->start_time - $data->end_time);
                    $row = "<td colspan = ".$dif."><div data-user=".$data->id." class=\"item assigned\">".$data->title."</div></td>";
                    $i = $i + $dif;
                  }
                  else{
                    $row = "<td class=\"drop\"></td>";
                    $i = $i +1;
                  }
                  echo $row;
                } else {
                  echo "<td class=\"lunch\">Lunch</td>";
                  $i = $i +1;
                }
              }
              ?>
            </tr>
        </table>
    </div>
</div>
</center>

<style type="text/css">
    .left{
        width:120px;
        float:left;
    }
    .left table{
        background:#E0ECFF;
    }
    .left td{
        background:#eee;
    }
    .right{
        width:900px;
    }
    .right table{
        background:#E0ECFF;
        width:100%;
    }
    .right td{
        background:#fafafa;
        color:#444;
        text-align:center;
        padding:5px;
        border:solid;
    }
    .right td{
        background:#E0ECFF;
    }
    .right td.drop{
        background:#fafafa;
        width:100px;
    }
    .right td.over{
        background:#FBEC88;
    }
    .item{
        text-align:center;
        border:1px solid #499B33;
        background:#fafafa;
        color:#444;
        width:100px;
    }
    .assigned{
        border:1px solid #BC2A4D;
    }
    .trash{
        background-color:red;
    }

</style>
<script>
    $(function(){
        $('.right .item').draggable({
            revert:true
        });

        $('.right td.drop').droppable({

            onDragEnter:function(){
                $(this).addClass('over');
            },
            onDragLeave:function(){
                $(this).removeClass('over');
            },
            onDrop:function(e,source){
                $(source).parent('td').addClass('drop');
                alert($(source).data("user"));

                $(this).removeClass('over');
                if ($(source).hasClass('assigned')){
                    $(this).append(source);

                } else {
                    var c = $(source).clone().addClass('assigned');
                    $(this).empty().append(c);
                    c.draggable({
                        revert:true
                    });
                }
            }
        });
        $('.left').droppable({
            accept:'.assigned',
            onDragEnter:function(e,source){
                $(source).addClass('trash');
            },
            onDragLeave:function(e,source){
                $(source).removeClass('trash');
            },
            onDrop:function(e,source){
                $(source).remove();
            }
        });
    });
</script>

</body>
</html>
