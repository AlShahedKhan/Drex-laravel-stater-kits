@foreach ($data['permissions'] as $permission)
    <tr>
        <td>{{ $permission->attribute }}</td>
        <td>
            <div class="permission-list-td">
                @foreach ($permission->keywords as $key => $keyword)
                <div class="input-check-radio">
                    <div class="form-check d-flex align-items-center">
                        @if ($keyword != '')
                            <input type="checkbox"
                                class="form-check-input mt-0 mr-4 read common-key"
                                name="permissions[]" value="{{ $keyword }}"
                                id="{{ $keyword }}" {{in_array($keyword, $data['role_permissions']) ? 'checked':''}}>
                            <label class="custom-control-label"
                                for="{{ $keyword }}">{{ __($key) }}</label>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>

        </td>
    </tr>
@endforeach