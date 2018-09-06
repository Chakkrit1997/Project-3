import { Component } from '@angular/core';
import { NavController } from 'ionic-angular';

@Component({
  selector: 'page-home',
  templateUrl: 'home.html'
})
export class HomePage {

  images : any = [];

  constructor(public navCtrl: NavController) {
    this.images=[
      {'image':'../../assets/img/pic1.jpg'},
      {'image':'../../assets/img/pic2.jpg'},
      {'image':'../../assets/img/pic3.jpg'},
      {'image':'../../assets/img/pic4.jpg'},
      {'image':'../../assets/img/pic5.jpg'}
    ]
  }

}
