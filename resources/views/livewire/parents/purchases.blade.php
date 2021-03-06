<div>
    <table class="min-w-full table-auto">
      <thead class="justify-between">
        <tr class="bg-gray-800">
          <th class="text-left py-4 px-6">
            <span class="text-gray-300">Name</span>
          </th>
          <th class="text-left py-4 px-4">
            <span class="text-gray-300">Value</span>
          </th>
          <th class="text-left py-4 px-4">
            <span class="text-gray-300">Price</span>
          </th>
          <th class="text-left py-4 px-4">
            <span class="text-gray-300">Purchase Date</span>
          </th>
        </tr>
      </thead>
      <tbody class="bg-gray-200">
        @foreach ($purchases as $purchase)
        <tr class="bg-white border-4 border-gray-200">
          <td class="text-left py-4 px-4">
            <span class="text-center ml-2 font-semibold">{{ $purchase->voucher->name }}</span>
          </td>
          <td class="text-left py-4 px-4">
            <span>${{ $purchase->voucher->value }}.00</span>
          </td>
          <td class="text-left py-4 px-4">
            <span>${{ $purchase->voucher->price }}</span>
          </td>
          <td class="text-left py-4 px-4">
            <span>{{ $purchase->purchase_date }}</span>            
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
