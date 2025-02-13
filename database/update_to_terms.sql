-- Drop existing foreign keys
ALTER TABLE schools DROP FOREIGN KEY IF EXISTS schools_semester_id_foreign;
ALTER TABLE exams DROP FOREIGN KEY IF EXISTS exams_semester_id_foreign;

-- Rename semesters table to terms if it exists and terms doesn't
SET @exist := (SELECT COUNT(*) FROM information_schema.tables WHERE table_name = 'semesters' AND table_schema = DATABASE());
SET @notexist := (SELECT COUNT(*) FROM information_schema.tables WHERE table_name = 'terms' AND table_schema = DATABASE());

SET @rename_stmt := IF(@exist > 0 AND @notexist = 0, 'RENAME TABLE semesters TO terms', 'SELECT 1');
PREPARE stmt FROM @rename_stmt;
EXECUTE stmt;
DEALLOCATE PREPARE stmt;

-- Rename semester_id columns to term_id
ALTER TABLE schools CHANGE COLUMN semester_id term_id BIGINT UNSIGNED NULL;
ALTER TABLE exams CHANGE COLUMN semester_id term_id BIGINT UNSIGNED NULL;

-- Add new foreign key constraints
ALTER TABLE schools ADD CONSTRAINT schools_term_id_foreign 
    FOREIGN KEY (term_id) REFERENCES terms(id) ON DELETE CASCADE;
ALTER TABLE exams ADD CONSTRAINT exams_term_id_foreign 
    FOREIGN KEY (term_id) REFERENCES terms(id) ON DELETE CASCADE;
