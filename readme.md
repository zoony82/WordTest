**2020.06.24**
- var_dump($wp_query);

        $wp_query : url에 따라서, 워드프레스가 필요한 것들을 호출해서 담아주는 객체
        index page에서 호출되는 것은 최신 글들 이다.(기본적으로 포스트 들을 담아서 가져 온다)
        http://localhost/wordpress/?post_type=book 를 통해 책 목록 확인 가능
        *위 페이지에서 나오는 wp_post 는 query_vars : 질의에 사용한 변수들
        wp_post -> request: sql문
        wp_post -> posts: 질의결과 가져온 글들
        아카이브 링크를 설정하려면 functions.php에서 'has_archive' => true, 하고, wp-admin에서 설정-고유주소-변경사항 저장을 post추가하고 나서 해줘야 함
        http://localhost/wordpress/book/ 그러면 이렇게 고유주소(아카이브페이지)로 결과가 나온다

**2020.06.24**
- have_post : $wp_query에서 더 표시할 post가 있는지 검사.
- the_post : template tag를 사용할 수 있게, $wp_query 의 현재 post를 셋팅(현재 포스터를 한칸 뒤로 이동한다)
- template tag : wp에서 정보를 동적으로 표시할 때 쓰는 함수들

**2020.06.25**
- 헤더/푸터 불러오고 셋팅하기
- 헤더를/푸터 불러오기
- get_header() header.php 를 인클루드
- wp_head() <head></head> 안에 들어갈 내용을 구성해 출력
- get_footer()
- wp_footer()
- 액션의 개념 익히고 활용하기
- wp_head 내용을 채우기

**2020.06.30**
- 스타일 불러오고 테마 기본 셋팅하기
- 두가지 액션 태그
+ after_setup_theme
+ wp_enque_scripts

        wp_enqueue_style('handle-name', get_stylesheet_url()); 기본 스타일시트 인클루드
        add_action(wp_queue_scripts, function_name) 기본 스타일시트 인클루드 함수를 등록
        add_action(after_setup_theme, function_name) 기본 테마 설정 함수를 등록

**2020.07.01**
- post(블로그 글 등), book(custom post type) : single.php 에서 관리
- page(웹사이트 정책, 소개페이지 등) : page.php 에서 관리
- 둘다 : singular.php 에서 관리
- single.php 에서 사용하는 함수들
        
        the_title() 제목을 출력
        the_permalink() url을 출력
        the_content() 내용을 출력

- get_the_title() 제목을 가져옴
- 그런데 get 보다는 the로 시작되는것들을 사용하는것이 좋다.

**2020.07.02**
- 책 정보 입력 항목 만들기
- 분류 추가
        
        저자, 번역자, 책 주제
        워드프레스에선 분류를 taxnomy라고 한다
        taxnomy(분류법) - term(용어)
        category : post의 기본 taxnomy
        미분류 : category taxnomy의 term
        
        우리가 만들 custom taxnomy : book-author, translator
        함수 : register_taxnomy($taxnomy, $object_type, $args);
        

- 필드 추가
        
        앞부제, 뒷부제, 가격, 출간일, 페이지 수, 표지 이미지

- 기존 필드 이름 변경
        
        제목, 책 소개, 목차

- hierarchical 

        계층형 : 카테고리, 주제
        비계층형 : 태그, 저자, 역자
    
- show_admin_column : 관리자 페이지 목록에 표시 여부, 기본값 false

- 그외 : public : 기본값 true 

- 상세 카테고리 추가

        https://codex.wordpress.org/Function_Reference/register_taxonomy

**2020.07.04**
- 책 정보 입력 항목 만들기 - 3

        metabox: post 편집 화면에서 한 영역을 뜻하는 용어. html의 필드셋 개념으로 생각하면 된다. 필드를 추가할 때 사용
        단순 input: 앞부제, 뒷부제, 가격, 출간일, 페이지수
        에디터: 목차
        이미지: 표지 이미지
        함수: add_meta_box()
        인자값: html id, 사람용 제목, 출력용 함수, [post type]
        액션: add_meta_boxes
        add_meta_boxes_{post-type}

**2020.07.05**
- 책 정보 입력 항목 만들기 - 목차용 에디터 붙이기

            wp_editor( $content, $editor_id, $settings = array() );

**2020.07.06**
- 업그레이드 편하게 하기

        사전 작업
        데이터베이스 백업
        mysql -uroot -p
        mysqldump -uroot -p bookstore bookstore.sql
        
        방법 1. 설정값 변경(wp-admin 에서 업데이트 하는것이 아닌 방법, 추천)
        wp-config.php
        
        define('FS_METHOD', 'direct');
        우분투: www-data(아파치 사용자) 그룹에 모든 파일을 소유시키고, 그룹에 쓰기 권한을 준다.
        
        방법 2. wp-cli 사용 (맥, 리눅스)
        wp-cli
        
        wp core update
        wp plugin update --all
        wp theme update --all
        wp language core update