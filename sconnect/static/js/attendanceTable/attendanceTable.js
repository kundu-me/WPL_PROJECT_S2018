/**
 * @author: Nirmallya Kundu <nxkundu@gmail.com>
 * @page: Account Verify JS
 * @description: This JS handles the verification of the new User Account
 **/

$(document).ready(function() {

    ajaxCallToLoadData();
    
});


function ajaxCallToLoadData() {

    $.ajax({
      type: "POST",
      url: "../data/attendanceTable/attendanceTable.php",
      data: {coursehash: $("#coursehash").val()},
      async:true,
      success: function(result) {

        console.log(result);

        var objResult = JSON.parse(result);

        if(objResult.success == "true" && objResult.message == "DATA") {

          $("#attendanceTable").empty();

          var attendanceKeys = objResult.attendanceKeys;

          $("#attendanceTable").append("<thead><tr id='attendanceTableHeaderRow'></tr></thead>");
          $("#attendanceTable").append("<tbody id='attendanceTableBody'></tbody>");

          var headerCells = "<td class='signup-label-td'><span class='signup-label'>" + "Student Id" + "</span></td>";
          headerCells += "<td class='signup-label-td'><span class='signup-label'>" + "Percentage" + "</span></td>";

          for(var index in attendanceKeys) {

            var columnHeader = attendanceKeys[index];
            var columnHeaderArr = columnHeader.split("|");

            headerCells += "<td class='signup-label-td data-top-down' title='" + columnHeaderArr[1] + "'>" + 
                           "<span class='signup-label'>" + columnHeaderArr[0] + "</span></td>"

          }

          $("#attendanceTableHeaderRow").append(headerCells);

          var attendanceData = objResult.attendanceData;

          for(var studentId in attendanceData) {

            var row = "<tr>";
            var cell = "<td class='signup-label-td'><span class='signup-label'>" + studentId + "</span></td>";
            row += cell;

            var attendanceDataStudent = attendanceData[studentId];
            var percentage = (Object.keys(attendanceDataStudent).length/ Object.keys(attendanceKeys).length) * 100;

            cell = "<td class='signup-label-td'><span class='signup-label'>" + parseInt(percentage) + "%" + "</span></td>";
            row += cell;

            
            for(var index in attendanceKeys) {

              try {
                if(attendanceDataStudent[index] == undefined || attendanceDataStudent[index] == null) {

                  console.log("yes");
                  cell = "<td class='signup-label-td'><span class='signup-label attendance-absent-text'>" + "A" + "</span></td>";
                }
                else {

                  console.log("no");
                  var cellData = attendanceDataStudent[index];
                  cell = "<td class='signup-label-td'><span class='signup-label'>" + cellData + "</span></td>";

                }
              }
              catch(e) {
                console.log("error");
              }
              row += cell;

            }

            row += "</tr>";
            $("#attendanceTableBody").append(row);
          }

        }
        
      }
    });
}