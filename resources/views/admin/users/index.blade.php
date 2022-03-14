<tbody>
    @forelse ($users as $user)
        
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->email }}</td>

        <td>
            {{ implode(' . ', $user->roles->map(function($role){

                    return $role->name;
                    })->$toArray()
                )
            }}

        </td>
        <td width="10px">
            <a class="btn btn-primary" href="{{  route('users.edit', $user) }}">Editar</a>
        </td>
    </tr>
        
    @endforelse

</tbody>