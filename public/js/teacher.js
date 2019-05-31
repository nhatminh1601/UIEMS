$(function () {

    var localHost = 'http://localhost:8080/'
    var isInsertCalenda = false,
    url = {
        addTeacher: '/createTeacher'
    }
    Init()

    // event 
    $('#btnSave').on('click', () => {
        SaveTeacher()
    })
    $(document).on('focus', ':input', function () {
        $(this).attr({
            'autocomplete': 'off',
            'maxlength': '255'
        });
    });
    $('.input-group.date').datepicker({
    });
    $('.select2').select2()
    // end event

    function Init() {
        let url = {
            deleteTeacher: '',
            updateTeacher: '',
            addTeacher: ''
        }
        let countClick = 0;
        let data = [{
            'STT':'1',
            'HoTen': 'Nguyễn Văn A',
            'SDT': '090909090',
            'DiaChi': '123123123',
            'PhongBan': 'Đào tạo'
        }]
        let events = {

            'click .js-remove': (e, value, row, index) => {
                alert(row)
                callAnythingOneTimes(deleteTeacher(value));

            },
            'click .js-edit': (e, value, row, index) => {
                alert(row)
                $('#teacher-popup').modal('toggle');
                callAnythingOneTimes(updateTeacher(value, row))
            }
        }
        let columns = teacher_table.ManagerTeacherTable(events);
        teacher_table.Init('teacher_table', data, columns, 'HoTen');
    }




    function SaveTeacher() {
        var param = {
            date: getValue('date'),
            startTime: getValue('startTime'),
            endTime :getValue('endTime'),
            shift: getValue('shift'),
            subject: getValue('subject')
        }
        postApi(param)
       // $('#teacher-popup').modal('hide'); //.modal('toggle');
    }

    function deleteTeacher(id) {
        getApi('/');
    }

    function updateTeacher(id, Teacher) {
        postApi('/', {})
    }

    function addTeacher(Teacher) {
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