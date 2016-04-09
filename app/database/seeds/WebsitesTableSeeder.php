    <?php

class WebsitesTableSeeder extends Seeder {
	public function run() {
		Website::create(
			array(
				'name' =>'My cool website', 'user_id' => 1
			)
		);

		Website::create(
			array(
				'name' =>'My other even cooler website', 'user_id' => 1
			)
		);

		Website::create(
			array(
				'name' =>'My website', 'user_id' => 2
			)
		);

		Website::create(
			array(
				'name' =>'My website', 'user_id' => 3
			)
		);

		Website::create(
			array(
				'name' =>'My website', 'user_id' => 4
			)
		);

		Website::create(
			array(
				'name' =>'passaicvisioncenterllc.com',
                                'user_id' => 5,
			)
		);

		Website::create(
			array(
				'name' =>'My website', 'user_id' => 6
			)
		);
	}
}
