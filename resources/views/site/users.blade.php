@extends('layouts.main')

@section('container')
<h1>Users</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col" class="d-none d-md-table-cell">No</th>
        <th scope="col"></th>
        <th scope="col">Name</th>
        <th scope="col" class="d-none d-md-table-cell">Email</th>
        <th scope="col">Admin</th>
        <th scope="col">Approved</th>
        <th scope="col" class="d-none d-md-table-cell">Updates</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)  
            <tr>
              <td class="d-none d-md-table-cell">{{ $loop->index +1 }}</td>
                <td>
                    @if (!Storage::disk('public')->exists('profile/' . $user->picture))
                        <img src="{{ asset('storage/' . $user->picture) }}" class="img-fluid rounded-circle" width="25">
                    @else
                        <img src="{{ asset('img/no.png') }}" class="img-fluid rounded-circle" width="25">
                    @endif
                </td>
                <td>{{ $user->name }}</td>
                <td class="d-none d-md-table-cell">{{ $user->email }}</td>
                <td>
                    <input class="form-check-input" type="checkbox" value="" id="is_admin" {{ $user->is_admin ? 'checked' : '' }} onclick="makeAdmin({{ $user->id }})">
                </td>
                <td>
                    <input class="form-check-input" type="checkbox" value="" id="is_approved" {{ $user->is_approved ? 'checked' : '' }} onclick="giveApproval({{ $user->id }})">
                </td>
                <td class="d-none d-md-table-cell">{{ $user->updated_at }}</td>
            </tr>
        @endforeach
    </tbody>
  </table>
  <script src="https://code.jquery.com/jquery-3.7.0.js" integrity="sha256-JlqSTELeR4TLqP0OG9dxM7yDPqX1ox/HfgiSLBj8+kM=" crossorigin="anonymous"></script>
  <script>
    function giveApproval(id) {
        var csrfToken = "{{ csrf_token() }}";

        $.ajax({
            url: '/users/approval/' + id,
            method: 'POST',
            dataType: "json",
            headers: {
                'X-CSRF-TOKEN': csrfToken // Menyertakan token CSRF dalam header permintaan
            },
            success: function(response) {
                console.log(response);
            },
            error: function(xhr, ajaxOption, thrownError) {
                console.error("AJAX error: " + xhr.status + "/n" + xhr.responseText + "/n" + thrownError);
            }
        });
    }

    function makeAdmin(id) {
        var csrfToken = "{{ csrf_token() }}";

        $.ajax({
            url: '/users/admin/' + id,
            method: 'POST',
            dataType: "json",
            headers: {
                'X-CSRF-TOKEN': csrfToken // Menyertakan token CSRF dalam header permintaan
            },
            success: function(response) {
                console.log(response);
            },
            error: function(xhr, ajaxOption, thrownError) {
                console.error("AJAX error: " + xhr.status + "/n" + xhr.responseText + "/n" + thrownError);
            }
        });
    }
  </script>
@endsection