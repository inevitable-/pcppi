<div id="Home">
    <div id="LeftColumn" class="box">
        <div id="Information">
            <table>
                    <td rowspan="3">
    <?php echo $this->Html->image('../media/transfer/img/' .$user['User']['basename'] , array('alt'=>__('Profile Picture', true), 'border'=>'0', 'width'=>'70px')); ?>
                    </td>
                    <td>
                        <span class="name">
    <?php echo sprintf("%s %s", $user['User']['first_name'], $user['User']['last_name']); ?>
                        </span>
                    </td>
                </tr>
                <tr>
                    <td>
    <?php echo $user['Department']['department'] . ' Department';?>    
                    </td>
                </tr>
                <tr>
                    <td>
    <?php echo $user['Position']['position'];?>    
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <div id="Announcements" class="box">
        <h1>Announcements</h1>
        <div id="AnnouncementsOverflow">
        <?php for($i = 0; $i < count($announcements); $i++) {?>
            <div class="announcement">
                <h2><?php echo $announcements[$i]['Announcement']['title']; ?></h2>
                <p>
                <?php
                $content = $announcements[$i]['Announcement']['content'];
                if(strlen($content) < 275){
                    echo $content;
                }else{
                    echo substr($content, 0, 275) . '...' . $this->Html->link(__('read more', true), array('controller'=>'announcements', 'action'=>'view', $announcements[$i]['Announcement']['id']));
                }
                ?>
                </p>
                <span class="info">
                    Uploaded by: <span class="uploader"><?php  echo $announcements[$i]['User']['username']; ?></span> at <span class="time"><?php echo date('F d, Y', strtotime($announcements[$i]['Announcement']['created'])) . ' ' . date('g:i:sa', strtotime($announcements[$i]['Announcement']['created']));?></span>
                </span>
            </div>
        <?php  }?>
        </div>
    </div>
</div>