%SOLAR SAVING CALCULATOR
%by EnergiHub //last revised on 180523

%user's input >> bill of electricity per month
e_bill= input ('enter your monthly bill:');
%e_bill=1.7e6; 

%assumption (external factor)
grid_price=1500; %in Rp 1st year
infl=0.05; %inflation rate of grid price per year 
eff_sun_hour=3;% in hour per day

%kVA determination
bought_kwh_pre=e_bill*12./grid_price; %kwh bought per yer (pre-solar)
kwh_per_day=bought_kwh_pre./365;
kwh_installed=kwh_per_day/(0.2*24);
kva_installed=kwh_installed/0.85;

%look_up_table_kva_installed
IC= [0.9 1.3 2.2 3.5 4.4 5.5 6.6 7.7 11 12 13 14 15 16 17 18 19 20 30 50 75 100];
error(1)=kva_installed-IC(1);
for i=2:22
    error(i)=abs(kva_installed-IC(i));
    if error(i)<5
        if error(i)<error(i-1)
        a=i;
        end
    end
end

%assumption of proposed panel
installed_cap=0.85*IC(a); %in kW
%installed_cap=6.7; %in kW
lifetime=25;%in year
%net cost estimation to install
exchange_rate=13514;%Rp/$
unit_install_cost=1.6; % $/Wp
total_cost=installed_cap*unit_install_cost*exchange_rate*1000;
%solar system performance
produced_kwh=365*eff_sun_hour*installed_cap;%kwh produced per year 
bought_kwh_post=bought_kwh_pre-produced_kwh; %kwh bought per year (post-solar)

%grid price escalation
grid_price(1)=grid_price;
for j=1:lifetime
    grid_price(j+1)=grid_price(j)*(1+infl);
end 

%electricity cost per year (PRE-SOLAR INSTALLATION)
for i=1:lifetime
    cost_pre(i)=bought_kwh_pre*grid_price(i);
end

%electricity cost per year (POST-SOLAR INSTALLATION)
for i=1:lifetime
    cost_post(i)=bought_kwh_post*grid_price(i);
end

%SAVING
total_saving=0;
for i=1:lifetime
    saving(i)=cost_pre(i)-cost_post(i);
    percent_saving(i)=saving(i)/cost_pre(i);
    total_saving=total_saving + saving(i);
end
yearly_saving=total_saving/lifetime;
monthly_saving=yearly_saving/12;

disp('cost needed:');disp(round(total_cost));
disp('to install solar system with Wp capacity of:');disp(installed_cap*1000);
disp('25 year saving:');disp(round(total_saving));
disp('saving per year in percent');disp(percent_saving(1)*100);
disp('average yearly saving:');disp(round(yearly_saving));
disp('1st month saving:');disp(round(saving(1)/12));
disp('average monthly saving:');disp(round(monthly_saving));













