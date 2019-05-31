let calendar_table = (function () {
    let table = {}
    table.Init = InitTable
    table.ManagerCalendarTable = ManagerCalendarTable
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

    function ManagerCalendarTable(events) {
        return [{
                field: 'STT',
                title: 'STT',
                sortable: true,
                searchFormatter: false
            },

            {
                field: 'NgayThi',
                title: 'Ngày thi',
                sortable: true,
                searchFormatter: false

            },
            {
                field: 'Ca',
                title: 'Ca',
                sortable: true,
                searchFormatter: false

            },
            {
                field: 'MonThi',
                title: 'Môn thi',
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