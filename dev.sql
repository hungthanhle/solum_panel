/****** Script for SelectTopNRows command from SSMS  ******/
SELECT TOP (1000) [area]
      ,[factory]
      ,[machine]
      ,[machine_group]
      ,[key_name]
      ,[total]
      ,[ymd]
      ,[date_time]
      ,[KeyGateway]
      ,[Machine_Description]
      ,[Tags_Description]
  FROM [KangWoon].[dbo].[View_data_kwh_total_2]
  WHERE [key_name] = 'MSDESSEMBLY13';

SELECT '1' as [key_name],[ymd],[total] FROM [KangWoon].[dbo].[View_data_kwh_total_2]
where [factory] = 'SOLUM' and [machine] = 'ELECTRIC_PANEL' and  [key_name]= 'MSDESSEMBLY13';

-- and [ymd] >= '$start_date' and [ymd] <= '$end_date' order by [ymd] asc
SELECT '2' as [key_name],[ymd],[total] FROM [KangWoon].[dbo].[View_data_kwh_total_2]
where [factory] = 'SOLUM' and [machine] = 'ELECTRIC_PANEL' and  [key_name]= 'MSDESSEMBLY45';


SELECT '1' as [key_name],[ymd],[total] FROM [KangWoon].[dbo].[View_data_kwh_total_2]
		where [factory] = 'SOLUM' and [machine] = 'ELECTRIC_PANEL'and  [key_name]= 'MSDESSEMBLY13' and [ymd] >= '20241007' and [ymd] <= '20241106';



SELECT * FROM [KangWoon].[dbo].[View_data_kwh_total_2];

SELECT 
    v.name AS ViewName,
    m.definition AS ViewDefinition
FROM 
    sys.views v
JOIN 
    sys.sql_modules m ON v.object_id = m.object_id
WHERE 
    v.name = 'View_data_kwh_total_2';

SELECT 
    v.name AS ViewName,
    m.definition AS ViewDefinition
FROM 
    sys.views v
JOIN 
    sys.sql_modules m ON v.object_id = m.object_id
WHERE 
    v.name = 'View_Data_KeyData_1KWH_IIOT_1';

SELECT * FROM [KangWoon].[dbo].[View_Data_KeyData_1KWH_IIOT_1];

SELECT * FROM [KangWoon].[dbo].[View_Sys_Area_Machine_Tags];


SELECT 
    v.name AS ViewName,
    m.definition AS ViewDefinition
FROM 
    sys.views v
JOIN 
    sys.sql_modules m ON v.object_id = m.object_id
WHERE 
    v.name = 'View_Data_KeyData_1KWH_IIOT';


SELECT 
    v.name AS ViewName,
    m.definition AS ViewDefinition
FROM
    sys.views v
JOIN 
    sys.sql_modules m ON v.object_id = m.object_id
WHERE 
    v.name = 'View_Sys_Area_Machine_Tags';

SELECT * FROM [KangWoon].[dbo].[Table_Sys_Area];
SELECT * FROM [KangWoon].[dbo].[Table_Sys_Factory];
SELECT * FROM [KangWoon].[dbo].[Table_Sys_Machine];
SELECT * FROM [KangWoon].[dbo].[Table_Sys_Machine_Group];
SELECT * FROM [KangWoon].[dbo].[Table_Sys_Tags];

SELECT COUNT(*) FROM [KangWoon].[dbo].[Table_Sys_Tags]; -- 1490
SELECT * FROM [KangWoon].[dbo].[View_Sys_Area_Machine_Tags];

SELECT [key_name], [ymd], [total] FROM [KangWoon].[dbo].[View_data_kwh_total_2] WHERE [factory] = 'SOLUM' AND [machine] = 'ELECTRIC_PANEL' AND [key_name] IN ('MSDESSEMBLY13', 'MSDESSEMBLY45', 'COMPLETE1', 'ADT1', 'DBHUMP2', 'MPAC02', 'LP07', 'SMT2202', 'LP06', 'BURNINRACK', 'BURNCHAMBER380', 'BURNIN190', 'BURNCHAMBER220V', '2FPANEL', 'TDLP26', 'TDMPAC05', 'TDMPFAN2', 'TDPP21', 'TDP190V1', 'TDPP29', 'TDLP25', 'FAN2F', 'PP03', 'TDMPAC07', 'TDPP279', 'TDPP26', 'TDPP25', 'AHUF1', 'FORMLASERMARKING', 'LP02', 'ELS2', 'ELS1', 'MPTEST02', 'LP01', 'FAN1F', 'SMT220V3', 'TDLP27', 'TDMPAC06', 'DP22', 'LP01A', 'SMT220V1', 'PP21', 'PPTP1', 'PANELOCQ', 'LP1PANEL', 'PPS1PANEL', 'PPM1PANEL', 'PANEL', 'LPST02', 'DPACPANEL', 'MPSTAC02', 'MPBURN380V', 'MPBURN380', 'LIGHTINGBURN', 'MORMALBURN380', 'MORMALBURN220V', 'SMTF21113', 'SMT220V2', 'SMTF23', 'SMT710', 'LP05', 'SMT46', 'SMT13', 'F2FANSMT', 'SMT2201', 'SMTF21415', 'LPOFF', 'TDPP13', 'PANEL01', 'PANEL02', 'LP14', 'SMDB', 'SMD2', 'SMD1', 'PP12', 'LP13', 'PP24', 'LP01B', 'PP23', 'MAINPANEL', 'PAIF1', 'PLASERMARKING', 'SMT220V4', 'PN2AI380V', 'MPAC1', 'LP12', 'LP11', 'MPAC01', 'PP11', 'MPAC03', 'AIB', 'LP03', 'LP04', 'LP16', 'LP18', 'LP17', 'PP14', 'LP15', 'MPSTAC01', 'LPST01', 'PPCOMP2PL', 'PPCOMP01', 'MPCOMPA', 'MPCOMPB', 'MPEF01', 'PPCOMP', 'CANTEEN1', 'CANTEEN2', 'LPGUARD') AND [ymd] >= '20241008' and [ymd] <= '20241107';

SELECT [key_name], [ymd], [total] FROM [KangWoon].[dbo].[View_data_kwh_total_2] WHERE [ymd] = '20241008' AND [factory] = 'SOLUM';

SELECT [key_name], [ymd], [total] FROM [KangWoon].[dbo].[View_data_kwh_total_2] WHERE [ymd] = '20241008' AND [factory] = 'SOLUM' AND [machine] = 'ELECTRIC_PANEL'
AND [key_name] IN ('MSDESSEMBLY13', 'MSDESSEMBLY45', 'COMPLETE1', 'ADT1', 'DBHUMP2', 'MPAC02', 'LP07', 'SMT2202', 'LP06', 'BURNINRACK', 'BURNCHAMBER380', 'BURNIN190', 'BURNCHAMBER220V', '2FPANEL', 'TDLP26', 'TDMPAC05', 'TDMPFAN2', 'TDPP21', 'TDP190V1', 'TDPP29', 'TDLP25', 'FAN2F', 'PP03', 'TDMPAC07', 'TDPP279', 'TDPP26', 'TDPP25', 'AHUF1', 'FORMLASERMARKING', 'LP02', 'ELS2', 'ELS1', 'MPTEST02', 'LP01', 'FAN1F', 'SMT220V3', 'TDLP27', 'TDMPAC06', 'DP22', 'LP01A', 'SMT220V1', 'PP21', 'PPTP1', 'PANELOCQ', 'LP1PANEL', 'PPS1PANEL', 'PPM1PANEL', 'PANEL', 'LPST02', 'DPACPANEL', 'MPSTAC02', 'MPBURN380V', 'MPBURN380', 'LIGHTINGBURN', 'MORMALBURN380', 'MORMALBURN220V', 'SMTF21113', 'SMT220V2', 'SMTF23', 'SMT710', 'LP05', 'SMT46', 'SMT13', 'F2FANSMT', 'SMT2201', 'SMTF21415', 'LPOFF', 'TDPP13', 'PANEL01', 'PANEL02', 'LP14', 'SMDB', 'SMD2', 'SMD1', 'PP12', 'LP13', 'PP24', 'LP01B', 'PP23', 'MAINPANEL', 'PAIF1', 'PLASERMARKING', 'SMT220V4', 'PN2AI380V', 'MPAC1', 'LP12', 'LP11', 'MPAC01', 'PP11', 'MPAC03', 'AIB', 'LP03', 'LP04', 'LP16', 'LP18', 'LP17', 'PP14', 'LP15', 'MPSTAC01', 'LPST01', 'PPCOMP2PL', 'PPCOMP01', 'MPCOMPA', 'MPCOMPB', 'MPEF01', 'PPCOMP', 'CANTEEN1', 'CANTEEN2', 'LPGUARD');

EXEC sp_helpindex Table_Sys_Tags;
EXEC sp_helpindex API_Data_Min_Max_Key_Name_1;

SELECT TOP (100) PERCENT 
    key_name, 
    ymd, 
    Min_Value, 
    CONVERT(DATETIME, ymd) AS date_time,
    
    ISNULL(
        (
            SELECT TOP (1) Min_Value
            FROM dbo.View_Data_KeyData_1KWH_IIOT
            WHERE 
                ymd = CONVERT(varchar, DATEADD(DD, 1, table_main.ymd), 112)
                AND key_name = table_main.key_name
        ),
        (
            SELECT TOP (1) Max_Value
            FROM dbo.View_Data_KeyData_1KWH_IIOT AS View_Data_KeyData_1KWH_IIOT_1
            WHERE 
                ymd = table_main.ymd
                AND key_name = table_main.key_name
        )
    ) AS Max_Value,
    
    area, 
    factory, 
    machine, 
    machine_group, 
    KeyGateway
FROM dbo.View_Data_KeyData_1KWH_IIOT AS table_main
ORDER BY ymd, key_name;


SELECT
	table_b.area,
    table_b.factory,
    table_b.machine,
    table_b.machine_group,
    table_b.key_name,
	MONTH(table_b.date_time) AS month,
    YEAR(table_b.date_time) AS year,
    SUM (table_b.Max_Value - table_b.Min_Value) AS total
FROM dbo.View_Data_KeyData_1KWH_IIOT_1 AS table_b
WHERE table_b.ymd <> ''
AND [factory] = 'SOLUM'
AND [machine] = 'ELECTRIC_PANEL'
AND [ymd] >= '20240101' and [ymd] <= '20241231'
GROUP BY table_b.area,
    table_b.factory,
    table_b.machine,
    table_b.machine_group,
    table_b.key_name,
	MONTH(table_b.date_time),
    YEAR(table_b.date_time);
-- AND [ymd] >= '20241008' and [ymd] <= '20241107';
-- AND  [key_name] IN ('MSDESSEMBLY13', 'MSDESSEMBLY45', 'COMPLETE1', 'ADT1', 'DBHUMP2', 'MPAC02', 'LP07', 'SMT2202', 'LP06', 'BURNINRACK', 'BURNCHAMBER380', 'BURNIN190', 'BURNCHAMBER220V', '2FPANEL', 'TDLP26', 'TDMPAC05', 'TDMPFAN2', 'TDPP21', 'TDP190V1', 'TDPP29', 'TDLP25', 'FAN2F', 'PP03', 'TDMPAC07', 'TDPP279', 'TDPP26', 'TDPP25', 'AHUF1', 'FORMLASERMARKING', 'LP02', 'ELS2', 'ELS1', 'MPTEST02', 'LP01', 'FAN1F', 'SMT220V3', 'TDLP27', 'TDMPAC06', 'DP22', 'LP01A', 'SMT220V1', 'PP21', 'PPTP1', 'PANELOCQ', 'LP1PANEL', 'PPS1PANEL', 'PPM1PANEL', 'PANEL', 'LPST02', 'DPACPANEL', 'MPSTAC02', 'MPBURN380V', 'MPBURN380', 'LIGHTINGBURN', 'MORMALBURN380', 'MORMALBURN220V', 'SMTF21113', 'SMT220V2', 'SMTF23', 'SMT710', 'LP05', 'SMT46', 'SMT13', 'F2FANSMT', 'SMT2201', 'SMTF21415', 'LPOFF', 'TDPP13', 'PANEL01', 'PANEL02', 'LP14', 'SMDB', 'SMD2', 'SMD1', 'PP12', 'LP13', 'PP24', 'LP01B', 'PP23', 'MAINPANEL', 'PAIF1', 'PLASERMARKING', 'SMT220V4', 'PN2AI380V', 'MPAC1', 'LP12', 'LP11', 'MPAC01', 'PP11', 'MPAC03', 'AIB', 'LP03', 'LP04', 'LP16', 'LP18', 'LP17', 'PP14', 'LP15', 'MPSTAC01', 'LPST01', 'PPCOMP2PL', 'PPCOMP01', 'MPCOMPA', 'MPCOMPB', 'MPEF01', 'PPCOMP', 'CANTEEN1', 'CANTEEN2', 'LPGUARD')

SELECT
    table_main.area,
    table_main.factory,
    table_main.machine,
    table_main.machine_group,
    table_main.key_name,
    table_main.KeyGateway,
    table_main.Machine_Description,
    table_main.Tags_Description
FROM dbo.View_Sys_Area_Machine_Tags AS table_main
WHERE table_main.key_data = '1' AND table_main.Area_Status = '1' AND table_main.Factory_Status = '1' AND table_main.Machine_Status = '1' AND table_main.Group_Status = '1' AND table_main.Tags_Status = '1'
AND [factory] = 'SOLUM'
AND [machine] = 'ELECTRIC_PANEL'
AND  [key_name] IN ('MSDESSEMBLY13', 'MSDESSEMBLY45', 'COMPLETE1', 'ADT1', 'DBHUMP2', 'MPAC02', 'LP07', 'SMT2202', 'LP06', 'BURNINRACK', 'BURNCHAMBER380', 'BURNIN190', 'BURNCHAMBER220V', '2FPANEL', 'TDLP26', 'TDMPAC05', 'TDMPFAN2', 'TDPP21', 'TDP190V1', 'TDPP29', 'TDLP25', 'FAN2F', 'PP03', 'TDMPAC07', 'TDPP279', 'TDPP26', 'TDPP25', 'AHUF1', 'FORMLASERMARKING', 'LP02', 'ELS2', 'ELS1', 'MPTEST02', 'LP01', 'FAN1F', 'SMT220V3', 'TDLP27', 'TDMPAC06', 'DP22', 'LP01A', 'SMT220V1', 'PP21', 'PPTP1', 'PANELOCQ', 'LP1PANEL', 'PPS1PANEL', 'PPM1PANEL', 'PANEL', 'LPST02', 'DPACPANEL', 'MPSTAC02', 'MPBURN380V', 'MPBURN380', 'LIGHTINGBURN', 'MORMALBURN380', 'MORMALBURN220V', 'SMTF21113', 'SMT220V2', 'SMTF23', 'SMT710', 'LP05', 'SMT46', 'SMT13', 'F2FANSMT', 'SMT2201', 'SMTF21415', 'LPOFF', 'TDPP13', 'PANEL01', 'PANEL02', 'LP14', 'SMDB', 'SMD2', 'SMD1', 'PP12', 'LP13', 'PP24', 'LP01B', 'PP23', 'MAINPANEL', 'PAIF1', 'PLASERMARKING', 'SMT220V4', 'PN2AI380V', 'MPAC1', 'LP12', 'LP11', 'MPAC01', 'PP11', 'MPAC03', 'AIB', 'LP03', 'LP04', 'LP16', 'LP18', 'LP17', 'PP14', 'LP15', 'MPSTAC01', 'LPST01', 'PPCOMP2PL', 'PPCOMP01', 'MPCOMPA', 'MPCOMPB', 'MPEF01', 'PPCOMP', 'CANTEEN1', 'CANTEEN2', 'LPGUARD');

SELECT [View_data_month_10].key_name, sum(Expr1) as [Expr1], (select top 1 [key_name_note_count].key_name_count from [key_name_note_count] where [key_name_note_count].key_name = [View_data_month_10].key_name) as key_name_count FROM [View_data_month_10] JOIN  [key_name_note_count] on [View_data_month_10].key_name = [key_name_note_count].key_name
where [View_data_month_10].[factory] = 'SOLUM' and [View_data_month_10].[machine] = 'ELECTRIC_PANEL' and [ymd] >= '20241008' and [ymd] <= '20241009'  
group by [View_data_month_10].key_name;


SELECT [View_data_month_10].key_name, sum(Expr1) as [Expr1] FROM [View_data_month_10]
where [View_data_month_10].[factory] = 'SOLUM' and [View_data_month_10].[machine] = 'ELECTRIC_PANEL' and [ymd] >= '20241008' and [ymd] <= '20241009'  
group by [View_data_month_10].key_name;


SELECT 
    v.name AS ViewName,
    m.definition AS ViewDefinition
FROM
    sys.views v
JOIN 
    sys.sql_modules m ON v.object_id = m.object_id
WHERE 
    v.name = 'View_data_month_01';
