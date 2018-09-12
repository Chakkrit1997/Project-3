import { Injectable } from '@angular/core';

@Injectable()
export class Config {
	public wordpressApiUrl = 'http://demo.titaniumtemplates.com/wordpress/?json=1';
}

export const firebaseConfig = {
	fire: {
		apiKey: "AIzaSyBK9pIgsLKtFDOKxYP11OMH1B2qs5PAgRk",
    	authDomain: "easysearch-49e58.firebaseapp.com",
   	 databaseURL: "https://easysearch-49e58.firebaseio.com",
    	projectId: "easysearch-49e58",
    	storageBucket: "easysearch-49e58.appspot.com",
    	messagingSenderId: "917202345618"
	}
};
