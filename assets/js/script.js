/*
$(document).ready(function() {
  $('select[name*="list"]').change(function() {
    var selectedOptions = $('select option:selected');
    $('select option').removeAttr('disabled');
    selectedOptions.each(function() {
        var value = this.value;
        if (value !== ''){
        var id = $(this).parent('select[name*="list"]').prop('id');
		var options = $('select[name*="list"]:not(#' + id + ') option[value=' + value + ']');
        options.prop('disabled', 'true');
        }
    });
});
});
*/

function chart(number){
    Chart.defaults.global.defaultFontFamily = 'vazir';
    var ctx = document.getElementById('chart');
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['امتیاز'],
            datasets: [{
                label: 'جمع امتیازات کاربران در بازه ی انتخاب شده',
                data: [number],
                backgroundColor: [
                    'rgba(75, 192, 192, 0.2)'
                ],
                hoverBackgroundColor: [
                    'rgba(75, 192, 192, 0.4)'
                ],
                borderColor: [
                    'rgba(0, 0, 0, 1)',
                ],
                borderWidth: 2
            }]
        },
        options: {
            barThickness:32,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        }
    });
}

/*
$(document).ready(function(){
    // make a common.js file into assets/js directory and load common.js file in template
    String.prototype.replaceAll = function(find, replace, str){
        return str.replace(find, replace);
    }

    //value is user id, come from sesstion in php
    $.ajax('url' + value, {
        dataType: 'json',
        success: function(data){
            var access = data.access.replaceAll(/\|/g, ',', data.access);
            access = access.substring(1, access.lenght-1);
            $("#currentaccess").val(access);
        }
    });
});
*/
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip()
});

$(document).ready(function() {
        $('#user_found').hide();
        $('#searchBtn').click(function() {
            var inputData = $('#searchInput').val();
            //alert(inputData);

            $.ajax({
                url: "/admin/searchUser",
                method: 'POST',
                dataType: "json",
                data: {keyword: inputData},
                success: function(data) {
                    if(data != null){
                        $('#not_found').hide();

                        $('#user_found tbody').html(
                            '<tr>' +
                            '<th>1</th>' +
                            '<td>'+data.fullname+'</td>' +
                            '<td>'+data.personal_id+'</td>' +
                            '<td>2500</td>'+
                            '<td><div class="btn-group"><button class="btn btn-sm btn-success" id="tableBtnInfo" data-toggle="tooltip" data-placement="bottom" title="افزودن امتیاز"><a href="#" class="text-white" id="btnScore"><i class="fa fa-plus"></i></a></button><button class="btn btn-sm btn-info" id="tableBtnInfo" data-toggle="tooltip" data-placement="bottom" title="مشاهده اطلاعات"><a href="#" class="text-white" id="btnStatus"><i class="fa fa-eye"></i></a></button></div></td>' +
                            '</tr>'
                        );
                        $('#btnScore').attr("href", "/admin/showaddScore/"+data.personal_id+'&'+data.user_id);
                        $('#btnStatus').attr("href", "/admin/status/"+data.personal_id);
                        $('#user_found').show();
                    } else {
                        $('#user_found').hide();
                        $('#not_found').show();
                    }
                    //console.log(data);
                }
            })
        })
    });

$("#user_detail").ready(function(){
    var i;
    $("#progress, #table").hide();

    $.ajax({
        url: "/admin/getDetail",
        method: "POST",
        dataType: "json",
        success: function(data) {
            if(data != null){
                // change progress bars value and text
                var detail = JSON.parse(data.details);

                sum = parseInt(data.sum);
                extra = parseInt(data.extra);
                var finalScore = sum + extra;
                var badResult = 100-finalScore;

                $('#goodResult').css({width: finalScore+'%'});
                $('#badResult').css({width: badResult+'%'});
                $('#goodResult').text(finalScore+'% عملکرد خوب');
                $('#badResult').text(badResult+'% عملکرد ضعیف');

                //change table score and text

                for(i=1;i<=10;i++){
                    $("#score_"+i).text(detail['score_'+i]);
                    $("#text_"+i).text(detail['text_'+i]);
                }
                $("#progress, #table").show();
            }

        }
    });
});

$("#changeaccess").ready(function() {
    $("#change-access-btn").click(function() {
        var personalid = window.location.pathname.substr(14,19);
        var selectAccess = $("#accesslevel option:selected").text();
        var currentAccess = $("#currentacess").val();
        if($("#accesslevel option:selected").val()!=0){
            if(selectAccess!=currentAccess){
                $("#change-access-msg").hide();
               var newAccess = $("#accesslevel option:selected").val();

               //console.log(personalid);
               //console.log(newAccess);

               $.ajax({
                   url: "/admin/accessLevel",
                   method: "POST",
                   dataType: "json",
                   data: {newAccess: newAccess, personalId: personalid},
                   success: function(data){}
               });

               $.ajax({
                   url: "/admin/getAccess",
                   method: "POST",
                   dataType: "json",
                   data: {personalId: personalid},
                   success: function(data) {
                       if(data.access === "|user|"){
                           $("#currentacess").val("کاربر");
                       }else if(data.access === "|admin|"){
                           $("#currentacess").val("مدیر");
                       }

                       var $el = $("#currentacess"),
                           x = 2000,
                           originalColor = $el.css('color');

                       $el.css({"color":"red","font-weight":"900"});
                       setTimeout(function(){
                           $el.css({"color":originalColor,"font-weight":"400"});
                       }, x);

                       $("#accesslevel").val(0);
                   }
               });
            } else {
                $("#change-access-msg").text("سطح دسترسی انتخاب شده با سطح دسترسی فعلی برابر است و امکان تغییر وجود ندارد!").css({"color":"red","font-weight":"900"});
            }
        }
    });
});

$("#change-user-pass").ready(function() {
    $("#change-pass-btn").click(function() {
        var personalid = window.location.pathname.substr(14,19);
        var pass = $("#change-pass").val();
        var passconf = $("#change-passconf").val();
        if(pass === passconf){
            $.ajax({
                url: "/admin/changeUserPass",
                method: "POST",
                dataType: "json",
                data:{passConf: passconf, personalId: personalid},
                success: function(data) {
                    if(data == true){
                        var $el = $("#change-pass-msg"),
                            x = 2500,
                            originalColor = $el.css('color');

                        $el.css({"color":"green","font-weight":"900"});
                        $el.text("پسورد کاربر با موفقیت تغییر یافت.").show();
                        setTimeout(function(){
                            $el.css({"color":originalColor,"font-weight":"400"}).hide();
                        }, x);
                    } else {
                        var $el = $("#change-pass-msg"),
                            x = 3000,
                            originalColor = $el.css('color');

                        $el.css({"color":"red","font-weight":"900"});
                        $el.text("رمزعبور تغییر نیافت! فرایند تغییر رمز دچار مشکل شده است.").show();
                        setTimeout(function(){
                            $el.css({"color":originalColor,"font-weight":"400"}).hide();
                        }, x);
                    }
                }
            });
        } else {
            $("#change-pass-msg").text("پسوردهای وارد شده یکسان نیستند! لطفا مجددا تلاش کنید.").css({"color":"red","font-weight":"900"});
            $("#change-pass").focus();
        }
    });
});


$(document).ready(function() {
    $("#listproblem").hide();

    $("#usersList").click(function() {
        $(this).parent().hide();
        $.ajax({
            url: "/admin/showAllUsers",
            method: "POST",
            dataType: "json",
            success: function (data) {
                //data = null;
                if (data != null) {
                    var i;
                    var access;
                    var total;
                    var pid;
                    var uid;
                    var link = "/admin/status/";
                    for (i = 0; i <= data.length; i++) {
                        pid = data[i]['personal_id'];
                        uid = data[i]['user_id'];
                        if (data[i]['access'] == '|user|') {
                            access = "کاربر";
                        } else if (data[i]['access'] == '|admin|') {
                            access = "مدیر";
                        } else if (data[i]['access'] == '|superadmin|') {
                            access = "مدیرکل";
                        }

                        if (data[i]['total'] == null) {
                            total = "ندارد";
                        } else {
                            total = data[i]['total'];
                        }

                        var $url = link + pid;
                      $("#list_found tbody").append(
                            '<tr class="lead">' +
                            '<td>' + [i + 1] + '</td>' +
                            '<td>' + data[i]['fullname'] + '</td>' +
                            '<td>' + pid + '</td>' +
                            '<td>' + total + '</td>' +
                            '<td>' + access + '</td>' +
                            '<td>' +
                            '<div class="btn-group">' +
                            '<button class="btn btn-sm btn-info"><a class="text-white text-decoration-none" href=""><i class="fas fa-eye"></i></a></button>' +
                            '</div>' +
                            '</td>' +
                            '</tr>'
                        );
                        //console.log(url); /admin/status/98101
                        //                  /admin/status/98102 and etc

                        //$("#list_found tbody button a").attr(href,url); only /admin/status/98104 add to all href!
                    } //end for loop
                } else {
                    $("#listproblem").css({"font-weight": "900"});
                    $("#listproblem").show();
                }

            }
        });
    });
});

$(document).ready(function() {
    $("#report-button").click(function() {
        var from = $("#from-date").val();
        var to = $("#to-date").val();
        var access = $("#report-access").val();
        from = from.split("/").join("-");
        to = to.split("/").join("-");
        access = access.split("|").join("");

        $.ajax({
            url: "/user/getReport",
            method: "post",
            dataType: "json",
            data:{fromDate: from, toDate: to, access:access},
            success: function(data) {
                if(data.length > 0){
                    $("#result tbody").empty();
                    var i;
                    for(i=0;i<=data.length;i++){
                        $("#result tbody").append(
                        '<tr class="lead">'+
                        '<td>'+ [i + 1] +'</td>'+
                        '<td>'+data[i]['date']+'</td>'+
                        '<td>'+data[i]['sum']+'</td>'+
                        '</tr>'
                        );
                    }
                } else {
                    new Noty({text: 'در بازه ی انتخاب شده گزارشی وجود ندارد.', type: 'info', theme: 'bootstrap-v4', timeout: 4000, progressBar: true,}).show();
                }
            }
        });
    });
});


$(document).ready(function() {
    //$("#adminResult").hide();
    $("#report-admin-button").click(function() {
        var from = $("#from-date").val();
        var to = $("#to-date").val();
        from = from.split("/").join("-");
        to = to.split("/").join("-");

        $.ajax({
            url: "/admin/adminReport",
            method: "post",
            dataType: "json",
            data:{fromDate: from, toDate: to},
            success: function(data) {
                const total = data[0]['total'];
                //$("#chart").empty();
                if(total != null){
                    chart(total);
                } else {
                    new Noty({text: 'در بازه ی انتخاب شده گزارشی وجود ندارد.', type: 'info', theme: 'bootstrap-v4', timeout: 4000, progressBar: true,}).show();
                }
            }
        });
    });
});


/*
$(document).ready(function() {
    $('#btnAddScore').click(function() {
        //alert("clicked");
        var formData = $('#addScoreForm input,#addScoreForm textarea').serialize();
        var formData = decodeURIComponent(formData);
        //console.log(formData);

        $.ajax({
            url: "/admin/addScore",
            method: 'POST',
            dataType: "json",
            data: {form_data: formData},
            success: function() {
                alert('score added');
            }
        })
    })

});
*/


$(document).ready(function(){
    $('#sidebar').on('shown.bs.collapse', function(event){
    if(event.target === this){
        $('html,body').animate({
            scrollTop: $('#toOfPage').offset().top
          }, 1500);
    }
    });
});

/**
 * persian Date picker
 */
$(document).ready(function(){
    from = $("#datepicker #from-date").pDatepicker({
        responsive: true,
        altField: '#from-date',
        altFormat: "YYYY/MM/DD",
        observer: true,
        format: 'YYYY/MM/DD',
        initialValue: false,
        initialValueType: 'persian',
        autoClose: true,
        maxDate: 'today',
        timePicker: {
            enabled: false
        },
        dayPicker: {
            enabled: true
        },
        yearPicker: {
            enabled: true
        },
        calendar: {
            persian: {
                enabled: true,
                locale: 'fa',
                leapYearMode: "algorithmic" // "astronomical"
            }
        },
        navigator: {
            scroll: {
                enabled: true
            },
            text: {
                btnNextText: 'بعدی',
                btnPrevText: 'قبلی'
            }
        },
        toolbox: {
            calendarSwitch: {
                enabled: false
            }
        },

        onSelect: function (unix) {
            from.touched = true;
            if (to && to.options && to.options.minDate != unix) {
                var cachedValue = to.getState().selected.unixDate;
                to.options = {minDate: unix};
                if (to.touched) {
                    to.setDate(cachedValue);
                }
            }
        }
    });

    to = $("#datepicker #to-date").pDatepicker({
        responsive: true,
        altField: '#to-date',
        altFormat: "YYYY/MM/DD",
        observer: true,
        format: 'YYYY/MM/DD',
        initialValue: false,
        initialValueType: 'persian',
        autoClose: true,
        maxDate: 'today',
        timePicker: {
            enabled: false
        },
        dayPicker: {
            enabled: true
        },
        yearPicker: {
            enabled: true
        },
        calendar: {
            persian: {
                enabled: true,
                locale: 'fa',
                leapYearMode: "algorithmic" // "astronomical"
            }
        },
        navigator: {
            scroll: {
                enabled: true
            },
            text: {
                btnNextText: 'بعدی',
                btnPrevText: 'قبلی'
            }
        },
        toolbox: {
            calendarSwitch: {
                enabled: false
            }
        },

        onSelect: function (unix) {
            to.touched = true;
            if (from && from.options && from.options.maxDate != unix) {
                var cachedValue = from.getState().selected.unixDate;
                from.options = {maxDate: unix};
                if (from.touched) {
                    from.setDate(cachedValue);
                }
            }
        }
    });

});

$(document).ready(function() {
    $('#searchBar').keyup(function(event) {
        if(event.keyCode == 13){
            $('#searchBtn').click(); //this code click on a element
        }
    });
});















