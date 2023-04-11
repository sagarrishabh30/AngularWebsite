import { Component } from '@angular/core';
import { FormControl, FormGroup, FormControlName } from '@angular/forms'

@Component({
  selector: 'app-contact',
  templateUrl: './contact.component.html',
  styleUrls: ['./contact.component.css']
})
export class ContactComponent {
  contactForm= new FormGroup({
  Name : new FormControl(''),
  phone : new FormControl(''),
  email : new FormControl(''),
  message : new FormControl(''),
})
contactFormSubmit(){
  console.log(this.contactForm);
}
}
