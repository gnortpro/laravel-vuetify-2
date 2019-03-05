@extends('layouts.app')
@section('content')
                <v-container grid-list-md text-xs-center>
                    <h1>Toeic Courses</h1>
                    <v-layout justify-center row/>
                        
                        <v-flex xs3>
                        <v-card>
                            <v-img style="padding: 80px"
                            src="https://learn.x3english.com/wp-content/uploads/2019/01/01-bacsic-toeic.jpg"
                            aspect-ratio="2.75"
                            ></v-img>

                            <v-card-title primary-title>
                            <div>
                                <h3 class="headline mb-0">Basic Toeic</h3>
                                <div> ${ card_text } </div>
                            </div>
                            </v-card-title>

                            <v-card-actions>
                            <v-btn block color="primary" dark>Khám phá ngay</v-btn>
                            </v-card-actions>
                        </v-card>
                            </v-card>
                        </v-flex>
                        
                        <v-flex xs3>
                        <v-card>
                            <v-img style="padding: 80px"
                            src="https://learn.x3english.com/wp-content/uploads/2019/01/01-bacsic-toeic.jpg"
                            aspect-ratio="2.75"
                            ></v-img>

                            <v-card-title primary-title>
                            <div>
                                <h3 class="headline mb-0">Standard Toeic</h3>
                                <div> ${ card_text } </div>
                            </div>
                            </v-card-title>

                            <v-card-actions>

                            <v-btn block color="success" dark>Khám phá ngay</v-btn>
                     
                            </v-card-actions>
                        </v-card>
                            </v-card>
                        </v-flex>
                        <v-flex xs3>
                        <v-card>
                            <v-img style="padding: 80px"
                            src="https://learn.x3english.com/wp-content/uploads/2019/01/01-bacsic-toeic.jpg"
                            aspect-ratio="2.75"
                            ></v-img>

                            <v-card-title primary-title>
                            <div>
                                <h3 class="headline mb-0">Premium Toiec</h3>
                                <div> ${ card_text } </div>
                            </div>
                            </v-card-title>

                            <v-card-actions>
                            <v-btn block color="info" dark>Khám phá ngay</v-btn>
                            </v-card-actions>
                        </v-card>
                            </v-card>
                        </v-flex>

                    </v-layout>
                </v-container>

@endsection