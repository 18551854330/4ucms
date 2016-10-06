<?php
// common
define('LIB_PHPSELF','PHP_SELF');
define('COM_SUC','success');
define('COM_FLD','failed');
define('COM_EM_SUBJ','email_subject');
define('COM_LGIN','login');
define('COM_RST_PSD','reset_pasword');
define('COM_ILL','illegal');
define('LIB_TIMEZONE', 'timezone');
define('LIB_TRYM', 'tryagain');
// priv
define('PRIV_ITRC','interaction');
define('PRIV_WX','weixin');
define('PRIV_SYS','system');
// sql
define('LIB_CSELECT', 'SELECT * FROM cms_channel WHERE c_navigation = 1 AND c_parent = ');
define('LIB_CSELECTF', 'SELECT * FROM cms_channel WHERE c_parent = ');
define('LIB_CORDER', ' ORDER BY c_order ASC, id ASC');
define('LIB_CORDERS', 'c_order ASC, id ASC');
define('LIB_INST', 'INSERT');
// col
define('LIB_SAID', 'admin_id');
define('LIB_ANEWSID', 'a_news_id');
define('LIB_AREPLY', 'a_reply');
define('LIB_AREPLYT', 'a_reply_type');
define('LIB_CNAME', 'c_name');
define('LIB_CNNAME', 'c_nname');
define('LIB_CIFSUB', 'c_ifsub');
define('LIB_CLINK', 'c_link');
define('LIB_CTARGET', 'c_target');
define('LIB_CSAFE', 'c_safe');
define('LIB_CCMDL', 'c_cmodel');
define('LIB_CDMDL', 'c_dmodel');
define('LIB_CREC', 'c_rec');
define('LIB_CNAV', 'c_navigation');
define('LIB_DREC', 'd_rec');
define('LIB_DHOT', 'd_hot');
define('LIB_DPARENT', 'd_parent');
define('LIB_DDESC', 'd_description');
define('LIB_USERID', 'user_id');
define('LIB_FBASR', 'f_answer');
define('LIB_LNAME', 'l_name');
define('LIB_LURL', 'l_url');
define('LIB_LORDER', 'l_order');
define('LIB_LPICTURE', 'l_picture');
define('LIB_MTITLE', 'm_title');
define('LIB_MNAME', 'm_name');
define('LIB_MTYPE', 'm_type');
define('LIB_MCOVER', 'm_cover');
define('LIB_MMEDIA', 'm_media');
define('LIB_MIFCVR', 'm_ifcover');
define('LIB_MAUTH', 'm_author');
define('LIB_MCONT', 'm_content');
define('LIB_MSCONT', 'm_scontent');
define('LIB_MORDER', 'm_order');
define('LIB_MURL', 'm_url');
define('LIB_MLNK', 'm_link');
define('LIB_MIFSUB', 'm_ifsub');
define('LIB_MKEY', 'm_key');
define('LIB_MID', 'media_id');
define('LIB_MMID', 'm_media_id');
define('LIB_OORDER', 'o_order');
define('LIB_ONAME', 'o_name');
define('LIB_QURL', 'q_codeurl');
define('LIB_QDATE', 'q_date');
define('LIB_TPATH', 't_path');
define('LIB_SDOMAIN', 's_domain');
define('LIB_SPIC', 's_picture');
define('LIB_SURL', 's_url');
define('LIB_STYPE', 's_type');
define('LIB_SNAME', 's_name');
define('LIB_SQID', 's_qid');
define('LIB_SPARENT', 's_parent');
define('LIB_SRWT', 's_rewrite');
define('LIB_SEON', 's_seoname');
define('LIB_KEYWORD', 's_keywords');
define('LIB_SDESC', 's_description');
define('LIB_SRIGHT', 's_copyright');
define('LIB_SCODE', 's_code');
define('LIB_SUSER', 's_user');
define('LIB_SFB', 's_feedback');
define('LIB_SMESSTT', 's_message_title');
define('LIB_SMESSCVR', 's_message_cover');
define('LIB_SMESSLNK', 's_message_link');
define('LIB_URID', 'u_rid');
define('LIB_VNAME', 'v_name');
define('LIB_VIFM', 'v_ifmulti');
define('LIB_VSTIME', 'v_stime');
define('LIB_VETIME', 'v_etime');
// library
define('LIB_JS_ALERT', '<script type="text/javascript">alert("');
define('LIB_RQURI', 'REQUEST_URI');
define('LIB_QRY', 'query');
define('LIB_LIA', '<li><a href="');
define('LIB_LICLS', '<li class="');
define('LIB_LIE', '</li>');
define('LIB_ULE', '</ul>');
define('LIB_ALI', '</a></li>');
define('LIB_OPB', '<option value="');
define('LIB_OPE', '</option>');
define('LIB_HTTPAGT', 'HTTP_USER_AGENT');
define('LIB_UTF8', 'UTF-8');
define('LIB_TARGET', '" target="');
define('LIB_DESC', 'description');
define('LIB_TITLE', 'title');
define('LIB_TDEB', '</td><td>');
define('LIB_TDHEB', '</td><td class="am-hide">');
define('LIB_CLSACTIVE', 'class="am-active"');
define('LIB_CLSACT', 'am-active');
define('LIB_SELECTED', 'selected="selected"');
define('LIB_CHECKED', 'checked="checked"');
// wx
define('LIB_APPID', 'appid');
define('LIB_APPSCRT', 'appsecret');
define('LIB_ISALL', 'is_to_all');
define('LIB_SENDG', 'send_group');
define('LIB_MPTYPE', 'menu_type');
define('LIB_ERRCODE', 'errcode');
define('LIB_ERRMSG', 'errmsg');
define('LIB_MNAMEPRE', '","name":"');
define('LIB_TYPEPRE', '{"type":"');
define('LIB_MEDIAID', 'mediaid');
define('LIB_MEDIAIDPRE', '{"media_id":"');
define('LIB_BE', '"}');
define('LIB_IEDIVB', '"></i><div class="appmsg-title">');
define('LIB_DIVEDIVBLIE', '</div></div></li>');
define('LIB_CEIPTB', '" class="am-form-field"><input type="hidden" name="id[]" value="');
define('LIB_SPANBBTNS', '"><span class="am-input-group-btn"><button class="am-btn del" type="button" ids="');
define('LIB_LIBDIVBIPTB', '<li class="am-margin-bottom"><div class="am-input-group"> <input type="text" name="m_name[]" value="');
define('LIB_HTTPSACCESSTOKEN', 'https://api.weixin.qq.com/cgi-bin/material/del_material?access_token=');
define('LIB_CLSBIPTB', '" class="am-text-truncate"><input type="checkbox" name="id[]" id="id_');
define('LIB_CLSM', '" class="btn-del am-btn am-btn-default am-btn-xs am-fr" title="删除" ltype="');
define('LIB_LBLEDIVELIE', '</label></div></li>');
define('LIB_LIBAB', '<li><a href="javascript:;" data="act=materials_del&ids=');
define('LIB_VALUE', '" value="');
define('LIB_LBLB', '"><label for="id_');
define('LIB_TICKET', 'q_ticket');
define('LIB_ACTNAME', 'action_name');
define('LIB_SCNID', 'scene_id');
define('LIB_WXQRC', 'wx_qrcode');
define('LIB_WXMENU', 'wx_menu');
define('LIB_QRSCN', 'QR_SCENE');
define('LIB_MEDIA', 'media');
define('LIB_VIDEO', 'video');
define('LIB_EXPIS', 'expire_seconds');
define('LIB_WXQRCP', 'wx_qrcode.php');
define('LIB_WXMENUP', 'wx_menu.php');
// lang
define('LIB_ERRMSGCN', '\n\r错误信息:');