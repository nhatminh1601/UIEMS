$(function () {
    var localHost = 'http://localhost:8080/'
    var isInsertCalenda = false,
    url = {
        addCalendar: ''
    }
    Init()

    // event 
    $('#btnSave').on('click', () => {
        isInsertCalenda = true;
        SaveCalendar()
    })
    $(document).on('focus', ':input', function () {
        $(this).attr({
            'autocomplete': 'off',
            'maxlength': '255'
        });
    });
    $('.input-group.date').datepicker({
        todayBtn: "linked",
       autoclose: true,
       todayHighlight: true,
       format: 'dd/mm/yyyy' 
    }).datepicker("setDate", new Date())
    //Datemask dd/mm/yyyy
    $('#date').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Timepicker
    $('.timepicker').timepicker({
      showInputs: false
    })
    $('.select2').select2()
    // end event

    function Init() {
        let url = {
            deleteCalendar: '',
            updateCalendar: '',
            addCalendar: ''
        }
        let countClick = 0;
        let data = [{
            'STT':'1',
            'NgayThi': '01/02/2019',
            'Ca': 'Sáng',
            'MonThi': 'Toán',
            'KyThi': 'Khối A 2019'
        }]
        let events = {

            'click .js-remove': (e, value, row, index) => {
                alert(row)
                callAnythingOneTimes(deleteCalendar(value));

            },
            'click .js-edit': (e, value, row, index) => {
                //isInsertCalenda = false;
                $('#calendar-popup').modal('toggle');
                callAnythingOneTimes(updateCalendar(value, row))
            }
        }
        let columns = calendar_table.ManagerCalendarTable(events);
        calendar_table.Init('calendar_table', data, columns, 'NgayThi');
    }




    function SaveCalendar() {
        var param = {
            date: getValue('date'),
            startTime: getValue('startTime'),
            endTime :getValue('endTime'),
            shift: getValue('shift'),
            subject: getValue('subject')
        }
        addCalendar(param);
        //$('#calendar-popup').modal('hide'); //.modal('toggle');
    }

    function getValue(name){
        return $('#'+name+'').val();
    }

    function deleteCalendar(id) {
        getApi('/');
    }

    function updateCalendar(id, Calendar) {
        postApi('/', {})
    }

    function addCalendar(param) {
        postApi('/', {})
    }

    function callAnythingOneTimes(input, countClick) {

        if (countClick === 0) {
            input
        }
        countClick++
        setTimeout(function () {
            countClick = 0
        }, 500)
    }

    function getApi(url, param) {
        $.ajax({
            url: url,
            type: "POST", //send it through get method
            data: param,
            headers: {
                'accept': 'application/json;odata=verbose',
                'content-Type': 'application/json;odata=verbose'
            },
            success: function (response) {
                //Do Something
            },
            error: function (xhr) {
                //Do Something to handle error
            }
        });
    }

    function postApi(url, param) {
        $.ajax({
            url: url,
            type: "POST", //send it through get method
            data: JSON.stringify(param),
            headers: {
                'accept': 'application/json;odata=verbose',
                'content-Type': 'application/json;odata=verbose'
            },
            success: function (response) {
                //Do Something
            },
            error: function (xhr) {
                //Do Something to handle error
            }
        });
    }
})