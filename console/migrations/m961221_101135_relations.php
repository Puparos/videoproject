<?php

use yii\db\Migration;

class m961221_101135_relations extends Migration
{
    public function up()
    {
        //topic-section
        $this->createIndex('fk_topic_section_idx', '{{%topic}}', 'section_id');
        $this->addForeignKey('fk_topic_section', '{{%topic}}', 'section_id', '{{%section}}', 'id');
        //video-topic
        $this->createIndex('fk_video_topic_idx', '{{%video}}', 'topic_id');
        $this->addForeignKey('fk_video_topic', '{{%video}}', 'topic_id', '{{%topic}}', 'id');
        //image-video
        $this->createIndex('fk_image_video_idx', '{{%image}}', 'video_id');
        $this->addForeignKey('fk_image_video', '{{%image}}', 'video_id', '{{%video}}', 'id');
        //like-video
        $this->createIndex('fk_like_video_idx', '{{%like}}', 'video_id');
        $this->addForeignKey('fk_like_video', '{{%like}}', 'video_id', '{{%video}}', 'id');
        //like-user
        $this->createIndex('fk_like_user_idx', '{{%like}}', 'user_id');
        $this->addForeignKey('fk_like_user', '{{%like}}', 'user_id', '{{%user}}', 'id');
        //subscription-user
        $this->createIndex('fk_subscription_user_idx', '{{%subscription}}', 'user_id');
        $this->addForeignKey('fk_subscription_user', '{{%subscription}}', 'user_id', '{{%user}}', 'id');
        //subscription-section
        $this->createIndex('fk_subscription_section_idx', '{{%subscription}}', 'section_id');
        $this->addForeignKey('fk_subscription_section', '{{%subscription}}', 'section_id', '{{%section}}', 'id');
    }

    public function down()
    {
        $this->dropForeignKey('fk_topic_section_idx', '{{%topic}}');
        $this->dropIndex('fk_topic_section_idx', '{{%topic}}');

        $this->dropForeignKey('fk_video_topic_idx', '{{%video}}');
        $this->dropIndex('fk_video_topic_idx', '{{%video}}');

        $this->dropForeignKey('fk_image_video_idx', '{{%image}}');
        $this->dropIndex('fk_image_video_idx', '{{%image}}');

        $this->dropForeignKey('fk_like_video_idx', '{{%like}}');
        $this->dropIndex('fk_like_video_idx', '{{%like}}');

        $this->dropForeignKey('fk_like_user_idx', '{{%like}}');
        $this->dropIndex('fk_like_user_idx', '{{%like}}');

        $this->dropForeignKey('fk_subscription_user_idx', '{{%subscription}}');
        $this->dropIndex('fk_subscription_user_idx', '{{%subscription}}');

        $this->dropForeignKey('fk_subscription_section_idx', '{{%subscription}}');
        $this->dropIndex('fk_subscription_section_idx', '{{%subscription}}');
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
