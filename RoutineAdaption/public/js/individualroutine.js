function getRoutines() {
  var batch = document.getElementById('batch').value;
  var semester = document.getElementById('semester').value;

  console.log(semester);

  window.location = 'http://localhost:8000/getclass/' + batch +
    '/' + semester;

}

$(function() {

  $isdrappable = 1;

  $('.right .item').draggable({
    revert: true
  });

  $('.right td.drop').droppable({

    onDragEnter: function(e, source) {

      $tableid = $(this).attr('data-id');
      $tableidc1 = $tableid.charAt(0);
      $tableidc2 = parseInt($tableid.slice(1, $tableid.length));
      //console.log(parseInt($tableid));
      $dif = $(source).parent('td').attr('data-dif');
      //console.log(parseInt($dif));

      $isdrappable = 0;

      if (parseInt($dif) > 1) {
        for ($j = $tableidc2; $j < (parseInt($dif) + $tableidc2); $j++) {
          //console.log($tableidc1 + $j)

          try {
            $diftemp = document.getElementById($tableidc1 + $j).dataset
              .dif;
          } catch (e) {
            $diftemp = 1;
          }

          $isdrappable = parseInt($isdrappable) + parseInt(
            $diftemp);
          //console.log(parseInt($diftemp));
        }
      }
      if ($isdrappable == 0) {
        $(this).addClass('over');
        //console.log('droppable');
      } else {
        $(this).addClass('notover');
        //console.log('not droppable');
      }


    },
    onDragLeave: function() {
      $(this).removeClass('notover');
      $(this).removeClass('over');
    },
    onDrop: function(e, source) {


      $(this).removeClass('over');
      $(this).removeClass('notover');


      if ($isdrappable == 0 && $(source).hasClass('assigned')) {
        $(this).append(source);
        $(source).parent('td').addClass('drop');
        $id = $(source).attr('data-id');
        $dif = $(source).attr('data-dif');
        $oldtime = $(source).attr('data-time');
        $oldday = $(source).attr('data-day');
        $room_id = $(source).attr('data-room_id');
        $teacher_id = $(source).attr('data-teacher_id');


        $newday = $(this).attr('data-day');
        $newtime = $(this).attr('data-time');



        console.log($room_id + $teacher_id);

        $batch = document.getElementById('batch').value;
        $semester = document.getElementById('semester').value;

        var data = new FormData();
        data.append('id', $id);
        data.append('day', $newday);
        data.append('time', $newtime);
        data.append('batch', $batch);
        data.append('semester', $semester);
        data.append('dif', $dif);
        data.append('oldtime', $oldtime);
        data.append('oldday', $oldday);
        data.append('room_id', $room_id);
        data.append('teacher_id', $teacher_id);


        var xhr = new XMLHttpRequest();
        xhr.open('POST', 'http://localhost:8000/adapt', true);
        xhr.onload = function() {
          // do something to response
          console.log(this.responseText);
          //location.reload();
        };
        xhr.send(data);
      } else {
        var x = document.getElementById("snackbar");
        x.className = "show";
        setTimeout(function() {
          x.className = x.className.replace("show", "");
        }, 3000);
      }



    }
  });
  $('.left').droppable({
    accept: '.assigned',
    onDragEnter: function(e, source) {
      $(source).addClass('trash');
    },
    onDragLeave: function(e, source) {
      $(source).removeClass('trash');
    },
    onDrop: function(e, source) {
      $(source).remove();
    }
  });
});
