@extends('layouts.app')

@section('content')
  <div class="bg-gray-100 p-4 sm:p-8">
    <div class="container mx-auto">
      <h2 class="text-2xl font-semibold mb-4">Employee Directory</h2>

      <div class="shadow-md rounded-lg overflow-x-auto">
        <table class="min-w-full divide-y divide-gray-200 bg-white">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                First Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Last Name
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Phone Number
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Email
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Address
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Position
              </th>
              <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                Salary
              </th>
              <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">
                Action
              </th>
            </tr>
          </thead>
          <tbody class="divide-y divide-gray-200">
            <tr class="hover:bg-gray-50">
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                Jane
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">
                Cooper
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                (555) 123-4567
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                jane.cooper@example.com
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                123 Main St, Anytown, USA 12345
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">
                Software Engineer
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 text-right">
                $120,000
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-right">
                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                <a href="#" class="text-red-600 hover:text-red-900 ml-4">Delete</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
