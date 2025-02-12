import { DataTable } from "simple-datatables";

document.addEventListener("DOMContentLoaded", function () {
    const tables = document.querySelectorAll(".datatable");
    tables.forEach((table) => {
        new DataTable(table);
    });
});
