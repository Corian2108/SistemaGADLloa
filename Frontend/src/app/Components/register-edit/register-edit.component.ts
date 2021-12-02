import { Component, OnInit } from '@angular/core';
import {ActivatedRoute} from '@angular/router'
import { Register } from 'src/app/class/register';
import { RegisterService } from 'src/app/services/register.service';
import { Estado } from 'src/app/class/estado';


@Component({
  selector: 'app-register-edit',
  templateUrl: './register-edit.component.html',
  styleUrls: ['./register-edit.component.css']
})
export class RegisterEditComponent implements OnInit {
  id:any;
  data:any;
  estado:any;
  registros= new Register();
  constructor(private route:ActivatedRoute ,private dataService:RegisterService) { }

  ngOnInit(): void {
    this.id=this.route.snapshot.params.id;
   this.getData(); 
   console.log(this.id);
   this.dataService.getestados().subscribe(res=>{
    this.estado=res});
  }
  getData(){
    this.dataService.getUserById(this.id).subscribe(res=>{
      this.data=res;
      this.registros=this.data;
    })
      } 
      
    updateProductos(){
     this.dataService.updateProductosData(this.id,this.registros).subscribe(resp=>{alert("Se actualizó correctamente")})
    }

}
