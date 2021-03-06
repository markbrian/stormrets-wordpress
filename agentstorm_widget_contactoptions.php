<?php
/*******************************************************************************
    Wordpress IDX and Contact Manager Plugin
    Copyright (C) 2010-2011 StormRETS, Inc.

    This program is free software: you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program.  If not, see <http://www.gnu.org/licenses/>.
*******************************************************************************/
?>

    <label>Title</label><br />
    <input type="text" name="as_contactwidget_title" value="<?php echo AgentStormSettingCache::get('as_contactwidget_title'); ?>" class="widefat" />
    <label>Description</label><br />
    <input type="text" name="as_contactwidget_desc" value="<?php echo AgentStormSettingCache::get('as_contactwidget_desc'); ?>" class="widefat" />
    <label>Success Message</label><br />
    <input type="text" name="as_contactwidget_success" value="<?php echo AgentStormSettingCache::get('as_contactwidget_success'); ?>" class="widefat" />
    <label>Button Text</label><br />
    <input type="text" name="as_contactwidget_button" value="<?php echo AgentStormSettingCache::get('as_contactwidget_button'); ?>" class="widefat" />
    <input type="hidden" name="as_contactwidget_save" value="1" />