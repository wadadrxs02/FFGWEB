<style>
table {
    counter-reset: rowNumber;
}

table tr>td:first-child {
    counter-increment: rowNumber;
}

table tr td:first-child::before {
    content: counter(rowNumber);
    min-width: 1em;
    margin-right: 0.5em;
}

table thead {
    background-color: #56c596;
    border: 3px;
}

.dataTables_wrapper .dataTables_paginate .paginate_button {
    color: rgb(141, 54, 54) !important;
    float: left;
    padding: 10px !important;
    position: relative;
    right: 0;
    min-width: 65px;
    line-height: 10px !important;
    border: 1px solid #e5e5e5;
    -webkit-border-radius: 3px;
    -moz-border-radius: 3px;
    border-radius: 3px;
    background: white !important;
    margin-left: -3px;
}

.dataTables_wrapper .dataTables_paginate .paginate_button:hover {
    background: #56c596 !important;
    color: black !important;
    border-radius: 4px !important;
    border: 1px solid #00ad5f !important;
}

.dataTables_wrapper .dataTables_paginate .paginate_button:active {
    background: #00ad5f !important;
    color: white !important;
}

div.container6 {
    display: flex !important;
    align-items: right !important;
    justify-content: right !important;
}

.btn-success {
    color: #fff;
    background-color: #56c596 !important;
    border-color: #56c596 !important;
}

.recieved {
    color: #00ad5f !important;
}
.approved {
    color: #ffdb58 !important;
}
.denied {
    color: #fa4251 !important;
}
.pending {
    color: blue !important;
}

</style>