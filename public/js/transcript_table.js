let transcript_table = (function () {
    let table = {}
    table.Init = InitTable
    table.ManagerTranscriptTable = ManagerTranscriptTable
    return table;

    function InitTable(name, data,columns, uniqueId) {
        $('#' + name + '').bootstrapTable('destroy')
        $('#' + name + '').bootstrapTable({
            columns: columns,
            data: data,
            uniqueId: uniqueId,
            search: true,
            pagination: true,
            pageSize: 25
        })
    };

    function ManagerTranscriptTable(events) {
        return [{
                field: 'STT',
                title: 'STT',
                sortable: true,
                searchFormatter: false
            },
            {
                field: 'SBD',
                title: 'SBD',
                sortable: true,
                searchFormatter: false
            },
            {
                field: 'HoTen',
                title: 'Họ và tên',
                sortable: true,
                searchFormatter: false
            },
            {
                field: 'NgaySinh',
                title: 'Ngày sinh',
                sortable: true,
                searchFormatter: false

            },
            {
                field: 'MonThi',
                title: 'Môn Thi',
                sortable: true,
                searchFormatter: false

            },
            {
                field: 'Diem',
                title: 'Điểm',
                sortable: true,
                searchFormatter: false

            },
            {
                field: 'KyThi',
                title: 'Kỳ thi',
                sortable: true,
                searchFormatter: false

            },
            {
                field: '',
                title: '',
                class: '',
                formatter: formatAction,
                events: events

            }
        ]

    }

    function formatAction(value, row, index) {
        let remove = '<a class="js-remove"><i class="glyphicon glyphicon-remove"></i></a>';
        let edit = '<a class="js-edit" style="margin-right:10px;"><i class="glyphicon glyphicon-pencil"></i></a>';
        return edit + remove;
    }
})();