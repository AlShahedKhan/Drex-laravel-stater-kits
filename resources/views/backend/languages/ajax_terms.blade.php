@foreach($data['terms'] as $key => $row)
    <div class="row mb-3">
        <div class="col-md-6">
            <input class="form-control ot-input" name="name"
            list="datalistOptions" id="exampleDataList" value="{{ $key }}" disabled>
        </div>
        <div class="col-md-6">
            <input class="form-control ot-input"
            list="datalistOptions" id="exampleDataList" placeholder="{{ ___('language.translated_language') }}" name="{{ $key }}" value="{{ $row }}">
        </div>
    </div>
@endforeach