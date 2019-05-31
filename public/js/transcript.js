$(function () {


    Init()

    // event 
    $('#btnSave').on('click', () => {
        SaveTranscript()
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
            deleteTranscript: '',
            updateTranscript: '',
            addTranscript: ''
        }
        let countClick = 0;
        let data = [{
            'STT':'1',
            'SBD': '190101',
            'HoTen': 'Nguyễn Văn A',
            'NgaySinh': '12/02/1992',
            'MonThi': 'Toán',
            'Diem': '9.5',
            'KyThi': 'Khối A 2019'
        }]
        let events = {

            'click .js-remove': (e, value, row, index) => {
                alert(row)
                callAnythingOneTimes(deleteTranscript(value));

            },
            'click .js-edit': (e, value, row, index) => {
                alert(row)
                $('#transcript-popup').modal('toggle');
                callAnythingOneTimes(updateTranscript(value, row))
            }
        }
        let columns = transcript_table.ManagerTranscriptTable(events);
        transcript_table.Init('transcript_table', data, columns, 'HoTen');
    }




    function SaveTranscript() {
        $('#transcript-popup').modal('hide'); //.modal('toggle');
    }

    function deleteTranscript(id) {
        getApi('/');
    }

    function updateTranscript(id, Transcript) {
        postApi('/', {})
    }

    function addTranscript(Transcript) {
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