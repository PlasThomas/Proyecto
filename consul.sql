show databases;
use tienda;
describe productos;
select * from venta;
-- delete from proveedores where( id_proveedores = 2);
select v.fecha, pv.nombre,sum(v.cantidad*precio_ven) Venta_total,sum(v.cantidad*p.precio_com) costo ,sum((p.precio_ven-p.precio_com)*v.cantidad) ganancia  
from venta v 
left join productos p on(v.id_producto = p.id_productos)
left join proveedores pv on(p.id_proveedor = pv.id_proveedores)
where(v.fecha = '2023-9-30') group by v.fecha,pv.nombre;
insert into venta(fecha,id_producto,v_total,costo,ganancia,cantidad) 
values (curdate(),3,48,40,4,2);

select @ac:= existencias from productos where( codigo = '7501000911783');
update productos set 
Existencias = (@ac + 10) 
where( codigo = '7501000911783');