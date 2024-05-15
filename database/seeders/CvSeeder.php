<?php

namespace Database\Seeders;

use App\Models\{
    ProfileDetail,
    ProfileLink,
    Skill,
    SkillType,
    WorkExperience
};
use Illuminate\Database\Seeder;

class CvSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        ProfileDetail::insert([
            [
                'key'   => 'name',
                'value' => 'Harmesh Uppal'
            ],
            [
                'key'   => 'intro',
                'value' => 'Full-stack developer with over 12 years experience in PHP and JavaScript'
            ],
            [
                'key'   => 'location',
                'value' => 'West Midlands, UK'
            ]
        ]);

        ProfileLink::insert([
            [
                'name'      => 'GitHub',
                'url'       => 'https://github.com/meshu-dev',
                'image_url' => 'https://cv.meshu.app/images/github-icon.png'
            ],
            [
                'name'      => 'LinkedIn',
                'url'       => 'https://www.linkedin.com/in/harmeshuppal',
                'image_url' => 'https://cv.meshu.app/images/linkedin-icon.png'
            ],
            [
                'name'      => 'GitHub',
                'url'       => 'https://github.com/meshu-dev',
                'image_url' => 'https://cv.meshu.app/images/github-icon.png'
            ]
        ]);

        $backendType   = SkillType::create(['name' => 'Backend']);
        $frontendType  = SkillType::create(['name' => 'Frontend']);
        $frameworkType = SkillType::create(['name' => 'Frameworks']);
        $otherType     = SkillType::create(['name' => 'Other']);

        Skill::insert([
            [
                'skill_type_id' => $backendType->id,
                'name'          => 'PHP'
            ],
            [
                'skill_type_id' => $backendType->id,
                'name'          => 'MySQL'
            ],
            [
                'skill_type_id' => $backendType->id,
                'name'          => 'NodeJS'
            ],
            [
                'skill_type_id' => $backendType->id,
                'name'          => 'Java'
            ],
            [
                'skill_type_id' => $frontendType->id,
                'name'          => 'Angular'
            ],
            [
                'skill_type_id' => $frontendType->id,
                'name'          => 'Backbone.js'
            ],
            [
                'skill_type_id' => $frontendType->id,
                'name'          => 'jQuery'
            ],
            [
                'skill_type_id' => $frontendType->id,
                'name'          => 'SASS'
            ],
            [
                'skill_type_id' => $frameworkType->id,
                'name'          => 'Laravel'
            ],
            [
                'skill_type_id' => $frameworkType->id,
                'name'          => 'Symfony'
            ],
            [
                'skill_type_id' => $frameworkType->id,
                'name'          => 'Express.js'
            ],
            [
                'skill_type_id' => $frameworkType->id,
                'name'          => 'Legacy'
            ],
            [
                'skill_type_id' => $otherType->id,
                'name'          => 'Amazon AWS'
            ],
            [
                'skill_type_id' => $otherType->id,
                'name'          => 'Mobile apps'
            ],
            [
                'skill_type_id' => $otherType->id,
                'name'          => 'Unit testing'
            ],
            [
                'skill_type_id' => $otherType->id,
                'name'          => 'Docker'
            ]
        ]);

        WorkExperience::insert([
            [
                'title'       => 'Software Developer',
                'location'    => 'Eastleigh',
                'date'        => 'Nov 20 – Present',
                'description' => 'Currently working on school payment apps, previously worked on a seat planner app',
                'responsibilities' => json_encode([
                    'Majority of work has been on the seat planner app built in a custom PHP framework',
                    'Worked on a laravel REST API to centralise school data',
                    'Developed Angular frontend school apps which interact with API',
                    'Built an Android / iOS homework web app using Ionic framework',
                    'Recently switched to Java as school payment apps are built with it'
                ])
            ],
            [
                'title'       => 'PHP Developer',
                'location'    => 'Sutton Coldfield',
                'date'        => 'Jul 19 – Oct 20',
                'description' => 'Worked in the housing repair services team for MRI software',
                'responsibilities' => json_encode([
                    'Worked on the House repairs PHP system which provides services to multiple clients',
                    'Developed a REST API in PHP using Laravel to modernise and migrate functionality off of the legacy system',
                    'Trained in and worked with C# and Angular to support other apps'
                ])
            ],
            [
                'title'       => 'Senior Developer',
                'location'    => 'Nottingham',
                'date'        => 'Jan 18 – Jul 19',
                'description' => 'MoreNiche is an affiliate network that specialise in fitness products',
                'responsibilities' => json_encode([
                    'Developed a Laravel API to manage data, also included API testing',
                    'Worked on a high traffic tracking server built with the Silex PHP framework',
                    'Worked with both Scrum and Kanban',
                    'Been on-call outside of work hours to maintain uptime of servers'
                ])
            ],
            [
                'title'       => 'Web Developer',
                'location'    => 'Stratford-upon-Avon',
                'date'        => 'Jun 16 – Jan 18',
                'description' => 'FPS distribution is a b2b company providing car parts to their clients',
                'responsibilities' => json_encode([
                    'Built and migrated features to a new Laravel API to replace the previous one built in NodeJS and Express',
                    'Worked on Drupal PHP modules for the company\'s ticketing system and company portal'
                ])
            ],
            [
                'title'       => 'Software Developer',
                'location'    => 'Loughborough',
                'date'        => 'Jun 15 – Apr 16',
                'description' => 'This carphone Warehouse branch involved work with TalkTalk, E2Save and Mobiles',
                'responsibilities' => json_encode([
                    'Worked on PHP e-commerce and backend management systems',
                    'Also worked on an in-store BackboneJS SPA app providing phone deals'
                ])
            ],
            [
                'title'       => 'Web Developer',
                'location'    => 'Nottingham',
                'date'        => 'Apr 13 – Jun 15',
                'description' => 'Twist Digital was an affiliate network that provided health, beauty, fitness and adult products',
                'responsibilities' => json_encode([
                    'Worked on the company’s dashboard and tracking apps built with Zend, Silex and MongoDB',
                    'Maintained uptime of live servers',
                    'Supported and mentored junior web developers'
                ])
            ]
        ]);
    }
}