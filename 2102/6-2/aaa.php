<?php
//    1查找 order_info 表中 order_sn  为 2020042321284 或 2020042369891 的记录
//     select * from  p_order_info where order_sn = 2020042321284 or order_sn = 2020042369891;
//     2查找  order_info 表中 user_id 为 1116 的订单记录，按支付时间倒序排序 。
    //select  * from p_order_info where user_id = 1116 order by pay_time desc;
//3查找 order_goods 表中 商品名（goods_name 字段） 中包含 WDR5620 的记录
//select * from p_goods where goods_name =  WDR5620;
//4统计 订单表（order_info）中有多少用户（count + distinct）
//select count(*) from p_order_info;
//5统计所有用户的订单总金额（按user_id分组）
//select sum(goods_amount) from p_order_info;
//6统计所有用户中支付金额最多的前10人
//select money_paid,sum(money_paid) from p_order_info order by money_paid desc limit 10;
//7统计订单表（order_info）中支付金额最高的前10个用户，及这10个用户的订单总金额(统计 order_info.money_paid)
//select money_paid,sum(money_paid) from p_order_info order by money_paid desc limit 10;
//8查找 order_info 表中 money_paid 大于等于 5000 并且 小于 等于 6000 的记录（两种写法）
//select * from p_order_info where money_paid between 5000 and 6000;
//select * from p_order_info where money_paid>5000 and  money_paid<6000;
//使用子查询查找 order_info 表中 money_paid 最大的记录（不一定是一条记录）????
//SELECT * from p_order_info where money_paid =  (select MAX(money_paid) from p_order_info);

//使用子查询查找 order_info 表中 money_paid 最小的记录（不一定是一条记录）????
//SELECT * from p_order_info where money_paid = ( select min(money_paid) from p_order_info);

//查找 order_info 表记录,按 money_paid 降序排序，取20条
//select * from p_order_info order by money_paid limit 20;
//统计 order_info 表有多少条记录？
//select count(*) from p_order_info;
//统计 order_info 表中订单均价？
//select AVG(goods_amount) from p_order_info;
//15 查找 order_info 表中共有多少个不同的 user_id
//select count(user_id) from p_order_info;
//16 统计 order_info 表中 money_paid（订单金额） 总和
//select sum(money_paid) from p_order_info;
//17 统计 order_info 表中 money_paid 的平均值
//select AVG(money_paid) from p_order_info;
// 18 检索 order_info 表中 add_time(字段类型为时间戳) 为 2013 年 6 月的记录????
//select * from p_order_info where add_time = 1583910957;
// 19、在订单表（order_info）中查找 最新的 10条记录及下单的用户信息。（需要联表查询 order_info- 与 users 表）????
//	    结果需包含以下字段：
//		    order_info.order_id： 订单号
//		    order_info.add_time: 下单时间
//		    order_info.money_paid: 订单金额
//		    users.user_id: 用户id
//		    users.user_name： 用户名
//		    users.reg_time: 注册时间（查询结果 以年月日显示 'xxxx-xx-xx xx:xx:xx'）
//	    要求：两种方式查询
//        >  where
//		    >  表1 inner join 表2 on 条件
//  20、查询商品表(goods)中最新添加的10个商品及商品分类信息(category)????
//		查询结果返回字段：
//
//goods.goods_id		商品id
//			goods.goods_name 	商品名
//			category.cat_id		商品分类id
//			category.cat_name	商品分类名
//
//		where实现
//		inno join on 实现

// 21、根据 订单商品表 （order_goods）统计卖的最多的前10种商品，及商品信息（需联表goods）
//		返回字段需包含：
//			goods_id: 商品ID
//			num:		卖出的数量
//			total:		总共卖了多少钱（order_goods.goods_price）
//
//    22、 统计订单表中所有已支付订单的总金额 ????
//    23、统计订单表中所有未支付的订单的总金额????


