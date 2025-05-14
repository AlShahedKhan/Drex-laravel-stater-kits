function emptyTable() {
    let html = `<tbody>
                <tr class="odd">
                    <td valign="top" colspan="${
                        table_data["column"].length + 1
                    }" class="dataTables_empty">
                        <div class="no-data-found-wrapper text-center ">
                            <img src="${__url}/images/no_data.svg" alt="" class="mb-primary" width="100">
                            <p class="mb-0 text-center">Nothing to show
                                here</p>
                            <p class="mb-0 text-center text-secondary font-size-90">
                                Please add a new entity or manage the
                                data table to see the content here</p>
                            <p class="mb-0 text-center text-secondary font-size-90">
                                Thank you
                            </p>
                        </div>
                    </td>
                </tr>
            </tbody>`;
    $("." + table_data["table_id"])
        .find("tbody")
        .remove();
    $("." + table_data["table_id"])
        .find("thead")
        .after(html);
    $(".ot-pagination").remove();
}