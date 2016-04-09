    <?php

class PagesTableSeeder extends Seeder {
	public function run() {
		Page::create(
			array(
				'website_id' => 1,
				'title' => 'Home'
			)
		);

		Page::create(
			array(
				'website_id' => 1,
				'title' => 'Services'
			)
		);

		Page::create(
			array(
				'website_id' => 1,
				'title' => 'About'
			)
		);

		Page::create(
			array(
				'website_id' => 1,
				'title' => 'Contact'
			)
		);

		Page::create(
			array(
				'website_id' => 2,
				'title' => 'Home'
			)
		);

		Page::create(
			array(
				'website_id' => 2,
				'title' => 'Services'
			)
		);

		Page::create(
			array(
				'website_id' => 2,
				'title' => 'About'
			)
		);

		Page::create(
			array(
				'website_id' => 2,
				'title' => 'Contact'
			)
		);

		Page::create(
			array(
				'website_id' => 3,
				'title' => 'Home'
			)
		);

		Page::create(
			array(
				'website_id' => 3,
				'title' => 'Services'
			)
		);

		Page::create(
			array(
				'website_id' => 3,
				'title' => 'About'
			)
		);

		Page::create(
			array(
				'website_id' => 3,
				'title' => 'Contact'
			)
		);

		Page::create(
			array(
				'website_id' => 4,
				'title' => 'Home'
			)
		);

		Page::create(
			array(
				'website_id' => 4,
				'title' => 'Services'
			)
		);

		Page::create(
			array(
				'website_id' => 4,
				'title' => 'About'
			)
		);

		Page::create(
			array(
				'website_id' => 4,
				'title' => 'Contact'
			)
		);

		Page::create(
			array(
				'website_id' => 5,
				'title' => 'Home'
			)
		);

		Page::create(
			array(
				'website_id' => 5,
				'title' => 'Services'
			)
		);

		Page::create(
			array(
				'website_id' => 5,
				'title' => 'About'
			)
		);

		Page::create(
			array(
				'website_id' => 5,
				'title' => 'Contact'
			)
		);

		Page::create(
			array(
				'website_id' => 6,
				'title' => 'Home',
                                'json_file_name' => 'index.json'
			)
		);

		Page::create(
			array(
				'website_id' => 6,
				'title' => 'Services'
			)
		);

		Page::create(
			array(
				'website_id' => 6,
				'title' => 'About'
			)
		);

		Page::create(
			array(
				'website_id' => 6,
				'title' => 'Contact'
			)
		);

		Page::create(
			array(
				'website_id' => 7,
				'title' => 'Home'                                
			)
		);

		Page::create(
			array(
				'website_id' => 7,
				'title' => 'Services'
			)
		);

		Page::create(
			array(
				'website_id' => 7,
				'title' => 'About'
			)
		);

		Page::create(
			array(
				'website_id' => 7,
				'title' => 'Contact'
			)
		);
	}
}