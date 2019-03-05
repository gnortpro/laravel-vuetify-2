@extends('layouts.app')
@section('content')
    <!-- <v-container grid-list-xs>
        <v-layout row wrap>
            
        </v-layout>
    </v-container> -->
    <div class="course-header" style="background-color: rgb(245, 245, 245)">
      <v-container grid-list-md>
            <v-layout row wrap>
                <v-flex xs4 class="course-img">
                    <v-img width="492px" height="305px" src="https://learn.x3english.com/wp-content/uploads/2017/07/05-banner-492x305-3.jpg"></v-img>
                </v-flex>
                <v-flex xs8>
                    <div class="display-2" style="margin-bottom: 20px">
                        Eng Breaking
                    </div>  
                    <div class="subheading" style="padding-bottom: 100px">
                        Phá băng tiếng Anh, thành thạo giao tiếp cơ bản với người bản xứ chỉ sau 144 giờ luyện tập, dựa trên 3 kỹ thuật nền tảng.
                    </div>
                    <div class="clearfix">
                        <div class="stage-completed float-left">
                            <p>1 out of 85 steps completed</p>
                        </div>
                        <div class="percent-completed float-right">
                            <p>1%</p>
                        </div>
                        <v-progress-linear v-model="valueDeterminate"></v-progress-linear>
                    </div>

                    
                  
                </v-flex>
            </v-layout>
          
      </v-container>
    </div>
    <div class="course-body">
        <v-container grid-list-md>
            <v-layout row wrap>
               <v-flex xs8>
                   <div class="course-title">
                        <div class="float-left">13 Lessons</div>
                        <div class="float-right"><v-btn outline color="primary" class="uppercase" dark>in progress</v-btn></div>
                   </div>
                   <div class="body-content" style="margin-top: 65px">
                        <div class="main-body-content">
                        Eng Breaking – Phá Tan Nỗi Sợ Giao Tiếp Tiếng Anh
                        Trọn bộ 12 lesson
                        Thời gian luyện: 144 tiếng, tương ứng với 12 tuần – 3 tháng luyện tập và thực hành
                        Tài khoản học Online trong 6 tháng kể từ ngày kích hoạt
                        Chi tiết nhiệm vụ hàng tuần:
                        1 ngày dành riêng cho việc luyện nghe với kỹ thuật Nghe Ngấm
                        1 ngày dành riêng cho việc luyện nói với kỹ thuật Nói Đuổi
                        4 ngày để thực hành phản xạ với kỹ thuật Phản Xạ Đa Chiều
                        Sau khi kết thúc Eng Breaking trình độ tiếng Anh của bạn sẽ

                        Giao tiếp tiếng Anh cơ bản
                        Đủ kỹ năng tiếng Anh để đi du lịch
                        Kết thúc Eng Breaking cũng là lúc bạn đã phá băng được khả năng giao tiếp tiếng Anh của mình.

                        Hãy luyện tập và thực hành Eng Breaking ngay!
                        </div>
                        <div class="lesson-in-course-content">
                            <div class="lesson-in-course-content-heading">
                                <div class="display-2 float-left" style="margin-bottom: 20px">
                                Lessions
                                </div>
                                <div class="float-right align-center mb-3">
                                    <v-btn @click="all"><v-icon>add_circle</v-icon>expand all</v-btn>
                                    <v-btn @click="none"><v-icon>remove_circle</v-icon>collapse all</v-btn>
                                </div>
                            </div>
                            

                                <v-expansion-panel
                                v-model="panel"
                                expand
                                focusable
                                inset
                                >
                                <v-expansion-panel-content
                                    v-for="(item,i) in item_panel"
                                    :key="i"
                                >
                                    <template v-slot:header>
                                    <div>Item</div>
                                    </template>
                                    <v-card>
                                    <v-card-text>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</v-card-text>
                                    </v-card>
                                </v-expansion-panel-content>
                                </v-expansion-panel>
                        </div>
                   </div>
               </v-flex> 
               <v-flex xs4>
                   <div class="side_course">
                        <v-container grid-list-md>
                        <div class="display-1" style="margin-bottom: 20px;">TIẾNG ANH TRÔI CHẢY HƠN</div>
                            <v-card flat color="success">
                                <v-img
                                src="https://cdn.vuetifyjs.com/images/cards/desert.jpg"
                                aspect-ratio="2.75"
                                ></v-img>

                                <v-card-title primary-title>
                                <div>
                                    <h3 class="headline mb-0">Kangaroo Valley Safari</h3>
                                    <div> ${ card_text } </div>
                                </div>
                                </v-card-title>

                                <v-card-actions>
                                <v-btn flat color="orange">Share</v-btn>
                                <v-btn flat color="orange">Explore</v-btn>
                                </v-card-actions>
                            </v-card>
                        </v-container>
                   </div>
               </v-flex>
            </v-layout>
        </v-container>
    </div>

@endsection