select count(id_sub) as 'nb_sucs', floor(avg(price)) as 'av_susc', mod(sum(duration_sub), 42) as 'ft'
 from subscription;
