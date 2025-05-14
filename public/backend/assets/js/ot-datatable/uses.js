/* Experimental */

//travel type table show
async function travelTypeTable() {
    let request=[];
    request['input'] =$(".__filtering input").serializeArray();
    request['url'] = "http://127.0.0.1:5500/users.json";
    request['table_class'] = ".travel_type_table_class";
    request['type']="GET";
    request['values'] = await getItems(request); 
    request['page'] = request['input']['page'] ?? 1;
    table(request);
}

let  getItems  = async(request) => {
    let response = await $.ajax({
        url: request['url'],
        type: request['type'],
        data:request['input'],
        success: function (response) {
          return response?.data ?? [];
        },
        error: function (error) {
            return [];
        },
    });
    return response;
}

$(".travel_type_table_class").length > 0 && travelTypeTable();



// //travel type table show
// function travelTypeTable() {
//     let data = [];
//     data["url"] = window.location.origin;
//     data["value"] = {
//         _token: _token,
//         limit: 10,
//     };
//     data["column"] = [
//         "id",
//         "name",
//         "status",
//         "action",  
//     ];

//     data["order"] = [[1, "id"]];
//     data["table_id"] = "travel_type_table_class";
//     table(data);
// }

// $(".travel_type_table_class").length > 0 && travelTypeTable();
