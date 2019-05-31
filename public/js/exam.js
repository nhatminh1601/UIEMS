$(function () {


    Init()

    // event 
    $('#btnSave').on('click', () => {
        SaveExam()
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
            deleteExam: '',
            updateExam: '',
            addExam: ''
        }
        let countClick = 0;
        let data = [{
            'STT':'1',
            'Nam': '2019',
            'Khoi': 'Khối A',
            'DiemChuan': '23.5'
        }]
        let events = {

            'click .js-remove': (e, value, row, index) => {
                alert(row)
                callAnythingOneTimes(deleteExam(value));

            },
            'click .js-edit': (e, value, row, index) => {
                alert(row)
                $('#exam-popup').modal('toggle');
                callAnythingOneTimes(updateExam(value, row))
            }
        }
        let columns = exam_table.ManagerExamTable(events);
        exam_table.Init('exam_table', data, columns, 'HoTen');
    }




    function SaveExam() {
        $('#exam-popup').modal('hide'); //.modal('toggle');
    }

    function deleteExam(id) {
        getApi('/');
    }

    function updateExam(id, Exam) {
        postApi('/', {})
    }

    function addExam(Exam) {
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