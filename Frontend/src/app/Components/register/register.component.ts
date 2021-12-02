import { Component, OnInit } from '@angular/core';
import { Register } from 'src/app/class/register';
import { RegisterService } from 'src/app/services/register.service';
import { Rol } from 'src/app/class/rol';
import { Estado } from 'src/app/class/estado';
@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css']
})
export class RegisterComponent implements OnInit {
  registro:any;
  rol:any;
  estado:any;
  registros= new Register();
  constructor(private dataService:RegisterService) { }

  ngOnInit(): void {
    this.getUserData()
    this.dataService.getRoles().subscribe(res=>{
    this.rol=res});
    this.dataService.getestados().subscribe(res=>{
      this.estado=res});
  }
  getUserData(){
    this.dataService.getData().subscribe(res=>{
     this.registro=res});
  }
  insertData(){
    this.dataService.insertData(this.registros).subscribe(res=>{ 
      this.getUserData();
    }) 
  }
  deleteData(id:string){
    this.dataService.deleteData(id).subscribe(res=>{
      this.getUserData();
    console.log(res) ;
       
    })
    this.getUserData();
   }

}
