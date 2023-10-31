<?php

namespace Database\Seeders;

use App\Models\Address;
use App\Models\Area;
use App\Models\Country;
use App\Models\Location;
use App\Models\Project;
use App\Models\ProjectType;
use App\Models\Site;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MetaSeeder extends Seeder

{
    use WithoutModelEvents;

    public $locations = [
        ['id' => '1', 'name' => 'Rajshahi', 'slug' => 'rajshahi'],
        ['id' => '2', 'name' => 'Chapai Nawabganj', 'slug' => 'chapai-nawabganj'],
        ['id' => '3', 'name' => 'Dhaka', 'slug' => 'dhaka'],
        ['id' => '4', 'name' => 'Khulna', 'slug' => 'khulna'],
        ['id' => '5', 'name' => 'Jessore', 'slug' => 'jessore'],
        ['id' => '6', 'name' => 'Gazipur', 'slug' => 'gazipur'],
        ['id' => '7', 'name' => 'Chittagong', 'slug' => 'chittagong'],
        ['id' => '9', 'name' => 'Kishoreganj', 'slug' => 'kishoreganj'],
        ['id' => '10', 'name' => 'Pabna', 'slug' => 'pabna'],
        ['id' => '11', 'name' => 'Sylhet', 'slug' => 'sylhet'],
        ['id' => '12', 'name' => 'Bogra', 'slug' => 'bogra'],
        ['id' => '13', 'name' => 'Barisal', 'slug' => 'barisal'],
        ['id' => '14', 'name' => 'Rajbari', 'slug' => 'rajbari'],
        ['id' => '15', 'name' => 'Jamalpur', 'slug' => 'jamalpur'],
        ['id' => '16', 'name' => 'Manikganj', 'slug' => 'manikganj'],
        ['id' => '17', 'name' => 'Mymensingh', 'slug' => 'mymensingh'],
        ['id' => '18', 'name' => 'Tangail', 'slug' => 'tangail'],
        ['id' => '19', 'name' => 'Coxs Bazar', 'slug' => 'coxs-bazar'],
        ['id' => '20', 'name' => 'Barguna', 'slug' => 'barguna'],
        ['id' => '21', 'name' => 'Bhola', 'slug' => 'bhola'],
        ['id' => '22', 'name' => 'Jhalokati', 'slug' => 'jhalokati'],
        ['id' => '23', 'name' => 'Patuakhali', 'slug' => 'patuakhali'],
        ['id' => '24', 'name' => 'Pirojpur', 'slug' => 'pirojpur'],
        ['id' => '25', 'name' => 'Bandarban', 'slug' => 'bandarban'],
        ['id' => '26', 'name' => 'Brahmanbaria', 'slug' => 'brahmanbaria'],
        ['id' => '27', 'name' => 'Chandpur', 'slug' => 'chandpur'],
        ['id' => '28', 'name' => 'Comilla', 'slug' => 'comilla'],
        ['id' => '29', 'name' => 'Feni', 'slug' => 'feni'],
        ['id' => '30', 'name' => 'Khagrachhari', 'slug' => 'khagrachhari'],
        ['id' => '31', 'name' => 'Lakshmipur', 'slug' => 'lakshmipur'],
        ['id' => '32', 'name' => 'Noakhali', 'slug' => 'noakhali'],
        ['id' => '33', 'name' => 'Rangamati', 'slug' => 'rangamati'],
        ['id' => '34', 'name' => 'Faridpur', 'slug' => 'faridpur'],
        ['id' => '35', 'name' => 'Gopalganj', 'slug' => 'gopalganj'],
        ['id' => '37', 'name' => 'Madaripur', 'slug' => 'madaripur'],
        ['id' => '38', 'name' => 'Munshiganj', 'slug' => 'munshiganj'],
        ['id' => '39', 'name' => 'Narayanganj', 'slug' => 'narayanganj'],
        ['id' => '40', 'name' => 'Narsingdi', 'slug' => 'narsingdi'],
        ['id' => '41', 'name' => 'Netrakona', 'slug' => 'netrakona'],
        ['id' => '42', 'name' => 'Shariatpur', 'slug' => 'shariatpur'],
        ['id' => '43', 'name' => 'Sherpur', 'slug' => 'sherpur'],
        ['id' => '44', 'name' => 'Bagerhat', 'slug' => 'bagerhat'],
        ['id' => '45', 'name' => 'Chuadanga', 'slug' => 'chuadanga'],
        ['id' => '46', 'name' => 'Jhenaidah', 'slug' => 'jhenaidah'],
        ['id' => '47', 'name' => 'Kushtia', 'slug' => 'kushtia'],
        ['id' => '48', 'name' => 'Magura', 'slug' => 'magura'],
        ['id' => '49', 'name' => 'Meherpur', 'slug' => 'meherpur'],
        ['id' => '50', 'name' => 'Narail', 'slug' => 'narail'],
        ['id' => '51', 'name' => 'Satkhira', 'slug' => 'satkhira'],
        ['id' => '52', 'name' => 'Joypurhat', 'slug' => 'joypurhat'],
        ['id' => '53', 'name' => 'Naogaon', 'slug' => 'naogaon'],
        ['id' => '54', 'name' => 'Natore', 'slug' => 'natore'],
        ['id' => '57', 'name' => 'Sirajganj', 'slug' => 'sirajganj'],
        ['id' => '58', 'name' => 'Dinajpur', 'slug' => 'dinajpur'],
        ['id' => '59', 'name' => 'Gaibandha', 'slug' => 'gaibandha'],
        ['id' => '60', 'name' => 'Kurigram', 'slug' => 'kurigram'],
        ['id' => '61', 'name' => 'Lalmonirhat', 'slug' => 'lalmonirhat'],
        ['id' => '62', 'name' => 'Nilphamari', 'slug' => 'nilphamari'],
        ['id' => '63', 'name' => 'Panchagarh', 'slug' => 'panchagarh'],
        ['id' => '64', 'name' => 'Rangpur', 'slug' => 'rangpur'],
        ['id' => '65', 'name' => 'Thakurgaon', 'slug' => 'thakurgaon'],
        ['id' => '66', 'name' => 'Habiganj', 'slug' => 'habiganj'],
        ['id' => '67', 'name' => 'Maulvibazar', 'slug' => 'maulvibazar'],
        ['id' => '68', 'name' => 'Sunamganj', 'slug' => 'sunamganj'],
        ['id' => '69', 'name' => 'Savar', 'slug' => 'savar']
    ];

    public $projects = [
        ['id' => '1', 'project_type_id' => '2', 'name' => 'Assort Hafsha Manor', 'slug' => 'assort-hafsha-manor', 'address' => 'Modhubazar', 'zip_code' => '0', 'location_id' => '3', 'area_id' => '11', 'country_id' => '1', 'flat_size' => '', 'parking' => '', 'height' => '', 'lift' => '', 'substation' => '0', 'generator' => '0', 'unit' => '', 'hand_over' => '', 'details' => 'Dhaka-1209', 'photo' => '1634966250-GAVKGjAwCOAWAbwfLZOXrLLrKHD.jpg', 'created_at' => '2021-07-15 17:01:15', 'updated_at' => '2021-08-16 19:55:59', 'views' => '196'],
        ['id' => '2', 'project_type_id' => '2', 'name' => 'Assort Khaled Homes', 'slug' => 'assort-khaled-homes', 'address' => '', 'zip_code' => '0', 'location_id' => '3', 'area_id' => '12', 'country_id' => '1', 'flat_size' => '', 'parking' => '', 'height' => '', 'lift' => '', 'substation' => '0', 'generator' => '0', 'unit' => '', 'hand_over' => '', 'details' => '', 'photo' => '1634966488-images.jpeg', 'created_at' => '2021-07-15 17:02:49', 'updated_at' => '2021-07-15 20:08:00', 'views' => '172'],
        ['id' => '3', 'project_type_id' => '1', 'name' => 'Assort Sultana Manor', 'slug' => 'assort-sultana-manor', 'address' => 'Plot: 137/10/A Modubazar West-Dhanmondi\, Dhaka-1209', 'zip_code' => '1209', 'location_id' => '3', 'area_id' => '11', 'country_id' => '1', 'flat_size' => 'A=820sft B=820sft. A+B= 1640 Sft', 'parking' => '3 nos.', 'height' => '7 storied (G+6)', 'lift' => 'Available', 'substation' => '0', 'generator' => '1', 'unit' => '2/1 nos.', 'hand_over' => 'June 2022', 'details' => '', 'photo' => '1629626310-dd01.jpg',  'created_at' => '2021-07-15 18:42:46', 'updated_at' => '2021-08-22 20:09:29', 'views' => '382'],
        ['id' => '4', 'project_type_id' => '1', 'name' => 'Assort Kiron Vila', 'slug' => 'assort-kiron-vila', 'address' => 'Plot: 214/1\, Sultangong Road', 'zip_code' => '1209', 'location_id' => '3', 'area_id' => '10', 'country_id' => '1', 'flat_size' => 'A=1400sft. & B=1400sft.', 'parking' => '10 nos.', 'height' => '9 storied (G+8]', 'lift' => 'Available', 'substation' => '0', 'generator' => '0', 'unit' => '2 nos', 'hand_over' => 'October 2024', 'details' => '', 'photo' => '1626503582-3.jpg', 'created_at' => '2021-07-17 16:33:02', 'updated_at' => '2021-07-18 15:42:18', 'views' => '211'],
        ['id' => '5', 'project_type_id' => '3', 'name' => 'Assort Sahera Homes', 'slug' => 'test', 'address' => 'North Goran, Khilghaon, Dhaka-1216.', 'zip_code' => '1219', 'location_id' => '3', 'area_id' => '6', 'country_id' => '1', 'flat_size' => '', 'parking' => '', 'height' => '', 'lift' => '', 'substation' => '1', 'generator' => '1', 'unit' => '', 'hand_over' => 'December 2019', 'details' => '', 'photo' => '1629104304-1628589412_jpg-3.jpg', 'created_at' => '2021-07-19 20:30:07', 'updated_at' => '2021-08-12 14:28:58', 'views' => '180'],
        ['id' => '6', 'project_type_id' => '1', 'name' => 'Assort Masallah Tower', 'slug' => 'assort-masallah-tower-1628578491', 'address' => 'Plot: 148/6,148/7,148/8, Modhubazar, West Dhanmond, Dhaka-1209.', 'zip_code' => '1209', 'location_id' => '3', 'area_id' => '11', 'country_id' => '1', 'flat_size' => 'A=1650sft,  B=1500sft. & C= 1160sft', 'parking' => '14 nos.', 'height' => '9 storied (G+8]', 'lift' => '2 Nos', 'substation' => '1', 'generator' => '1', 'unit' => '3 nos.', 'hand_over' => 'December 2025.', 'details' => '', 'photo' => '1661687688-3.jpg', 'created_at' => '2021-08-10 16:54:51', 'updated_at' => '2022-08-28 22:00:32', 'views' => '242'],
        ['id' => '7', 'project_type_id' => '3', 'name' => 'Assort Abeda Castle', 'slug' => 'assort-abeda-castle-1628579381', 'address' => 'Modhubazar, West Dhanmondi, Dhaka-1209.', 'zip_code' => '1209', 'location_id' => '3', 'area_id' => '13', 'country_id' => '1', 'flat_size' => '', 'parking' => '', 'height' => '', 'lift' => '', 'substation' => '1', 'generator' => '1', 'unit' => '', 'hand_over' => 'September 2020.', 'details' => '', 'photo' => '1629624653-caro7.jpg', 'created_at' => '2021-08-10 17:09:41', 'updated_at' => '2021-08-10 17:09:41', 'views' => '139'],
        ['id' => '8', 'project_type_id' => '3', 'name' => 'Noor Castle', 'slug' => 'noor-castle-1628579635', 'address' => 'Modhubazar, West Dhanmondi, Dhaka-1209.', 'zip_code' => '1209', 'location_id' => '3', 'area_id' => '11', 'country_id' => '1', 'flat_size' => '', 'parking' => '', 'height' => '', 'lift' => '', 'substation' => '0', 'generator' => '1', 'unit' => '', 'hand_over' => 'June 2021.', 'details' => '', 'photo' => '1629632211-rr.jpg', 'created_at' => '2021-08-10 17:13:55', 'updated_at' => '2021-08-22 20:12:18', 'views' => '150'],
        ['id' => '10', 'project_type_id' => '4', 'name' => 'Flat-Picture-1', 'slug' => 'test-1629096789', 'address' => 'Test', 'zip_code' => '1209', 'location_id' => '3', 'area_id' => '13', 'country_id' => '1', 'flat_size' => '', 'parking' => '', 'height' => '', 'lift' => '', 'substation' => '1', 'generator' => '1', 'unit' => '', 'hand_over' => '', 'details' => '', 'photo' => '1629096789-ready.jpg', 'created_at' => '2021-08-16 16:53:09', 'updated_at' => '2021-08-16 17:07:02', 'views' => '60'],
        ['id' => '11', 'project_type_id' => '4', 'name' => 'Flat-Picture-2', 'slug' => 'test-2-1629097284', 'address' => 'Test', 'zip_code' => '1209', 'location_id' => '3', 'area_id' => '13', 'country_id' => '1', 'flat_size' => '', 'parking' => '', 'height' => '', 'lift' => '', 'substation' => '1', 'generator' => '1', 'unit' => '', 'hand_over' => '', 'details' => 'Test', 'photo' => '1629097284-ready1.jpg', 'created_at' => '2021-08-16 17:01:24', 'updated_at' => '2021-08-16 17:06:36', 'views' => '65'],
        ['id' => '12', 'project_type_id' => '4', 'name' => 'Flat-Picture-3', 'slug' => 'test-3-1629097437', 'address' => 'Test', 'zip_code' => '1209', 'location_id' => '3', 'area_id' => '13', 'country_id' => '1', 'flat_size' => '', 'parking' => '', 'height' => '', 'lift' => '', 'substation' => '1', 'generator' => '1', 'unit' => '', 'hand_over' => '', 'details' => 'Test', 'photo' => '1629097437-ready2.jpg', 'created_at' => '2021-08-16 17:03:57', 'updated_at' => '2021-08-16 17:06:07', 'views' => '70']
    ];

    public $areas = [
        ['id' => '1', 'name' => 'Gulshan', 'slug' => 'gulshan', 'location_id' => '3'],
        ['id' => '2', 'name' => 'Uttara', 'slug' => 'uttara', 'location_id' => '3'],
        ['id' => '3', 'name' => 'Banani', 'slug' => 'banani', 'location_id' => '3'],
        ['id' => '4', 'name' => 'Niketon', 'slug' => 'niketon', 'location_id' => '3'],
        ['id' => '5', 'name' => 'Bashundhara', 'slug' => 'bashundhara', 'location_id' => '3'],
        ['id' => '6', 'name' => 'Khilghaon', 'slug' => 'khilghaon', 'location_id' => '1'],
        ['id' => '7', 'name' => 'Mirpur', 'slug' => 'mirpur', 'location_id' => '3'],
        ['id' => '8', 'name' => 'Razabazar', 'slug' => 'razabazar', 'location_id' => '3'],
        ['id' => '9', 'name' => 'Aftabnagar', 'slug' => 'aftabnagar', 'location_id' => '3'],
        ['id' => '10', 'name' => 'Rayer Bazar', 'slug' => 'rayer-bazar', 'location_id' => '3'],
        ['id' => '11', 'name' => 'West Dhanmondi', 'slug' => 'west-dhanmondi', 'location_id' => '3'],
        ['id' => '12', 'name' => 'Maniknagor', 'slug' => 'maniknagor', 'location_id' => '3'],
        ['id' => '13', 'name' => 'Dhanmondi', 'slug' => 'dhanmondi', 'location_id' => '3']
    ];

    public $project_types = [
        ['id' => '1', 'name' => 'Ongoing Projects', 'slug' =>  'ongoing-projects'],
        ['id' => '2', 'name' => 'Upcoming Projects', 'slug' => 'upcoming-projects'],
        ['id' => '3', 'name' => 'Handover Project', 'slug' => 'handover-project'],
        ['id' => '4', 'name' => 'Ready Flat', 'slug' => 'ready-flat']
    ];

    public $user = [
        'name' => 'Engr. Md. Jahid',
        'email' => 'jahid2172@gmail.com',
        'email_verified_at' => "3333333333",
        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
        'remember_token' => "3333333333",
        'phone' => '01711237957',
        'photo' => '1698350255-file-removebg-preview.png',
    ];

    public $address = [
        'country_id' => 1,
        'location_id' => 1,
        'area_id' => 1,
        'area_id' => 1,
        'zip_code' => null,
        'details' => '262/1(3rd floor), Road# 10/A, West Dhanmondi, Dhaka -1209',
    ];

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Site::create([
            "name" => "Assort Properties Ltd",
            "title" => "Assort Properties Ltd",
            "description" => "Assort Properties Ltd",
            "keywords" => "assort properties, assort properties ltd",
            "rel" => "index, follow",
            "revisit" => "7 days",
            "owner" => "Engr. Md. Jahid",
            "author" => "Engr. Md. Jahid",
            "email" => "assortproperties@gmail.com",
            "link" => "https://assortpropertiesltd.com",
            "copyright" => "Copyright © Assort Properties Ltd.",
            "logo" => "images/logo.png"
        ]);

        Country::create([
            "name" => "Bangladesh",
            "slug" => "bangladesh",
            "code" => "bd",
        ]);

        Location::insert($this->locations);
        Area::insert($this->areas);
        ProjectType::insert($this->project_types);
        Project::insert($this->projects);

        $user = User::create($this->user);
        $address = Address::create($this->address);
        $user->addresses()->save($address);
    }
}
