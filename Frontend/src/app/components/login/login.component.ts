import { Component, OnInit } from '@angular/core';
import { LoginServiceService } from 'src/app/services/login/login-service.service';
import { Router } from '@angular/router';

@Component({
  selector: 'app-login',
  templateUrl: './login.component.html',
  styleUrls: ['./login.component.css'],
})
export class LoginComponent implements OnInit {
  email: any;
  password: any;

  constructor(
    public loginService: LoginServiceService,
    public router: Router
  ) {}

  login() {
    const user = { email: this.email, password: this.password };
    console.log(user.email);
    console.log(user.password);
    this.loginService.login(user).subscribe(
      (data) => {
        console.log(data);
        this.loginService.setToken(data.token);
        this.router.navigateByUrl('/home');
      },
      (error) => {
        console.log(error);
      }
    );
  }

  ngOnInit(): void {}
}
