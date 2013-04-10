<?php
App::uses('AppModel', 'Model');
/**
 * Photo Model
 *
 * @property News $News
 * @property Project $Project
 */
class Photo extends AppModel {

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'News' => array(
			'className' => 'News',
			'foreignKey' => 'news_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Project' => array(
			'className' => 'Project',
			'foreignKey' => 'project_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	var $actsAs = array('MeioUpload' => array(
            'imagem' => array(
            'dir' => 'fotos',
            'create_directory' => true,
            'allowed_mime' => array('image/jpeg', 'image/pjpeg', 'image/png'),
            'allowed_ext' => array('.jpg', '.jpeg', '.png'),
            'thumbsizes' => array(
                'small'  => array('width'=>120, 'height'=>90),
                'medium'  => array('width'=>375, 'height'=>235),
                'big'  => array('width'=>620, 'height'=>420),
                'extrabig'  => array('width'=>960, 'height'=>640)
            ),
            'default' => 'default.jpg',
            )
        )
    );
}
