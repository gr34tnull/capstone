@php 
$users = App\Models\User::where('admin',false)->get();
@endphp
<div class="p-6 bg-transparent sm:px-20">
    <!-- This example requires Tailwind CSS v2.0+ -->
<div class="flex flex-col">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
      <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                Name
              </th>
              <!-- <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                Title
              </th> -->
              <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                Status
              </th>
              <!-- <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                Role
              </th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Edit</span>
              </th> -->
            </tr>
          </thead>
          <tbody class="bg-white divide-y divide-gray-200">
          @foreach($users as $user)
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  <div class="flex-shrink-0 w-10 h-10">
                    <img class="w-10 h-10 rounded-full" src="{{is_null($user->profile_photo_path) ? asset('july.png') : asset($user->profile_photo_path)}}" alt="">
                  </div>
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                      {{$user->name}}
                    </div>
                    <div class="text-sm text-gray-500">
                      {{$user->email}}
                    </div>
                  </div>
                </div>
              </td>
              <!-- <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                <div class="text-sm text-gray-500">Optimization</div>
              </td> -->
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="inline-flex px-2 text-xs font-semibold leading-5 rounded-full {{is_null($user->email_verified_at) ? 'text-red-800 bg-red-100' : 'text-green-800 bg-green-100'}}">
                  {{is_null($user->email_verified_at) ? 'Not Verified' : 'Verified'}}
                </span>
              </td>
              <!-- <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                Admin
              </td>
              <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
              </td> -->
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

</div>
