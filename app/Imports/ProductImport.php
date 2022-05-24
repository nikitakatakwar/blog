<?php

namespace App\Imports;

use App\Product;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Imports\HeadingRowFormatter;

HeadingRowFormatter::default('none');
class ProductImport implements ToModel, WithHeadingRow
{

    /**
     * Class constructor.
     */
    public function __construct($user_id = null)
    {
        $this->user_id = $user_id;
    }
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */

    public function model(array $row)
    {
        // dd($row);
        return new Product([
            'customer_id' => $this->user_id,
            'title'       => $row['Product Title'],
            'description' => $row['Description'],
            'price'       => $row['Price'],
            'quantity'    => $row['Quantity'],
        ]);
    }
}
