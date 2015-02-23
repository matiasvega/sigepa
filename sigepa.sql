SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `sigepa` ;
CREATE SCHEMA IF NOT EXISTS `sigepa` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `sigepa` ;

-- -----------------------------------------------------
-- Table `sigepa`.`obras_sociales`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sigepa`.`obras_sociales` ;

CREATE  TABLE IF NOT EXISTS `sigepa`.`obras_sociales` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `telefono` VARCHAR(45) NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `sigepa`.`patologias`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sigepa`.`patologias` ;

CREATE  TABLE IF NOT EXISTS `sigepa`.`patologias` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `descripcion` TEXT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `sigepa`.`estudios_complementarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sigepa`.`estudios_complementarios` ;

CREATE  TABLE IF NOT EXISTS `sigepa`.`estudios_complementarios` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NULL ,
  `descripcion` VARCHAR(45) NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `sigepa`.`pacientes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sigepa`.`pacientes` ;

CREATE  TABLE IF NOT EXISTS `sigepa`.`pacientes` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `dni` INT NOT NULL ,
  `nombre` VARCHAR(45) NOT NULL ,
  `apellido` VARCHAR(45) NOT NULL ,
  `sexo` VARCHAR(45) NULL ,
  `fechaNacimiento` DATE NULL ,
  `direccion` VARCHAR(45) NULL ,
  `telefonoFijo` VARCHAR(45) NULL ,
  `telefonoMovil` VARCHAR(45) NULL ,
  `fechaUltimaConsulta` DATE NULL ,
  `atiopia` TEXT NULL ,
  `habitos` TEXT NULL ,
  `medicacion_base` TEXT NULL ,
  `familiares` TEXT NULL ,
  `otros` TEXT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `sigepa`.`tratamientos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sigepa`.`tratamientos` ;

CREATE  TABLE IF NOT EXISTS `sigepa`.`tratamientos` (
  `id` INT(11) UNSIGNED NOT NULL ,
  `fechaInicio` DATE NULL ,
  `fechaFin` DATE NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `sigepa`.`drogas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sigepa`.`drogas` ;

CREATE  TABLE IF NOT EXISTS `sigepa`.`drogas` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NULL ,
  `contraindicaciones` TEXT NULL ,
  `precauciones` TEXT NULL ,
  `interacciones` TEXT NULL ,
  `embarazo_lactancia` TEXT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `sigepa`.`contraindicaciones`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sigepa`.`contraindicaciones` ;

CREATE  TABLE IF NOT EXISTS `sigepa`.`contraindicaciones` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `contraindicacion` TEXT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `sigepa`.`grupos_terapeuticos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sigepa`.`grupos_terapeuticos` ;

CREATE  TABLE IF NOT EXISTS `sigepa`.`grupos_terapeuticos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `descripcion` TEXT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `sigepa`.`composiciones`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sigepa`.`composiciones` ;

CREATE  TABLE IF NOT EXISTS `sigepa`.`composiciones` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `descripcion` TEXT NOT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `sigepa`.`medicamentos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sigepa`.`medicamentos` ;

CREATE  TABLE IF NOT EXISTS `sigepa`.`medicamentos` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nombre_comercial` VARCHAR(45) NOT NULL ,
  `descripcion` TEXT NULL ,
  `farmacologia` TEXT NULL ,
  `farmacodinamia` TEXT NULL ,
  `farmacocinetica` TEXT NULL ,
  `reacciones_adversas` TEXT NULL ,
  `indicaciones` TEXT NULL ,
  `dosificacion` TEXT NULL ,
  `sobredosificacion` TEXT NULL ,
  `presentacion` TEXT NULL ,
  `conservacion` TEXT NULL ,
  `advertencias` TEXT NULL ,
  `embarazo_lactancia` TEXT NULL ,
  `accion_terapeutica` TEXT NULL ,
  `drogas_id` INT UNSIGNED NOT NULL ,
  `contraindicaciones_id` INT UNSIGNED NOT NULL ,
  `grupos_terapeuticos_id` INT UNSIGNED NOT NULL ,
  `composiciones_id` INT UNSIGNED NOT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_medicamentos_drogas1_idx` (`drogas_id` ASC) ,
  INDEX `fk_medicamentos_contraindicaciones1_idx` (`contraindicaciones_id` ASC) ,
  INDEX `fk_medicamentos_grupos_terapeuticos1_idx` (`grupos_terapeuticos_id` ASC) ,
  INDEX `fk_medicamentos_composiciones1_idx` (`composiciones_id` ASC) ,
  CONSTRAINT `fk_medicamentos_drogas1`
    FOREIGN KEY (`drogas_id` )
    REFERENCES `sigepa`.`drogas` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_medicamentos_contraindicaciones1`
    FOREIGN KEY (`contraindicaciones_id` )
    REFERENCES `sigepa`.`contraindicaciones` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_medicamentos_grupos_terapeuticos1`
    FOREIGN KEY (`grupos_terapeuticos_id` )
    REFERENCES `sigepa`.`grupos_terapeuticos` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_medicamentos_composiciones1`
    FOREIGN KEY (`composiciones_id` )
    REFERENCES `sigepa`.`composiciones` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `sigepa`.`examenes_fisicos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sigepa`.`examenes_fisicos` ;

CREATE  TABLE IF NOT EXISTS `sigepa`.`examenes_fisicos` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `estatura` VARCHAR(45) NULL ,
  `peso` VARCHAR(45) NULL ,
  `piel` TEXT NULL ,
  `mucosas` TEXT NULL ,
  `ap_respiratorio` TEXT NULL ,
  `TA` TEXT NULL ,
  `FC` TEXT NULL ,
  `FR` TEXT NULL ,
  `oximetria_pulso` TEXT NULL ,
  `pacientes_id` INT(11) UNSIGNED NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  INDEX `fk_examenes_fisicos_pacientes1_idx` (`pacientes_id` ASC) ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_examenes_fisicos_pacientes1`
    FOREIGN KEY (`pacientes_id` )
    REFERENCES `sigepa`.`pacientes` (`id` )
    ON DELETE SET NULL
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `sigepa`.`obras_sociales_pacientes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sigepa`.`obras_sociales_pacientes` ;

CREATE  TABLE IF NOT EXISTS `sigepa`.`obras_sociales_pacientes` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `pacientes_id` INT(11) UNSIGNED NOT NULL ,
  `obras_sociales_id` INT(11) UNSIGNED NOT NULL ,
  `nro_afiliado` VARCHAR(45) NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_pacientes_has_obras_sociales_obras_sociales1_idx` (`obras_sociales_id` ASC) ,
  INDEX `fk_pacientes_has_obras_sociales_pacientes_idx` (`pacientes_id` ASC) ,
  CONSTRAINT `fk_pacientes_has_obras_sociales_pacientes`
    FOREIGN KEY (`pacientes_id` )
    REFERENCES `sigepa`.`pacientes` (`id` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pacientes_has_obras_sociales_obras_sociales1`
    FOREIGN KEY (`obras_sociales_id` )
    REFERENCES `sigepa`.`obras_sociales` (`id` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `sigepa`.`estudios_complementarios_pacientes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sigepa`.`estudios_complementarios_pacientes` ;

CREATE  TABLE IF NOT EXISTS `sigepa`.`estudios_complementarios_pacientes` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `pacientes_id` INT(11) UNSIGNED NOT NULL ,
  `estudios_complementarios_id` INT(11) UNSIGNED NOT NULL ,
  `resultado` TEXT NULL ,
  `adjunto` VARCHAR(45) NULL ,
  `fechaSolicitado` DATE NULL ,
  `fechaRealizado` DATE NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_pacientes_has_estudios_complementarios_estudios_compleme_idx` (`estudios_complementarios_id` ASC) ,
  INDEX `fk_pacientes_has_estudios_complementarios_pacientes1_idx` (`pacientes_id` ASC) ,
  CONSTRAINT `fk_pacientes_has_estudios_complementarios_pacientes1`
    FOREIGN KEY (`pacientes_id` )
    REFERENCES `sigepa`.`pacientes` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_pacientes_has_estudios_complementarios_estudios_complement1`
    FOREIGN KEY (`estudios_complementarios_id` )
    REFERENCES `sigepa`.`estudios_complementarios` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `sigepa`.`centros_atencion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sigepa`.`centros_atencion` ;

CREATE  TABLE IF NOT EXISTS `sigepa`.`centros_atencion` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(255) NOT NULL ,
  `direccion` VARCHAR(255) NOT NULL ,
  `telefono` VARCHAR(45) NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `sigepa`.`profesionales`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sigepa`.`profesionales` ;

CREATE  TABLE IF NOT EXISTS `sigepa`.`profesionales` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `apellido` VARCHAR(45) NULL ,
  `matricula` VARCHAR(45) NOT NULL ,
  `fechaNacimiento` DATE NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `sigepa`.`especialidades`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sigepa`.`especialidades` ;

CREATE  TABLE IF NOT EXISTS `sigepa`.`especialidades` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(45) NOT NULL ,
  `descripcion` VARCHAR(45) NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `sigepa`.`especialidades_profesionales`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sigepa`.`especialidades_profesionales` ;

CREATE  TABLE IF NOT EXISTS `sigepa`.`especialidades_profesionales` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `especialidades_id` INT UNSIGNED NOT NULL ,
  `profesionales_id` INT UNSIGNED NOT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_especialidades_has_profesionales_profesionales1_idx` (`profesionales_id` ASC) ,
  INDEX `fk_especialidades_has_profesionales_especialidades1_idx` (`especialidades_id` ASC) ,
  CONSTRAINT `fk_especialidades_has_profesionales_especialidades1`
    FOREIGN KEY (`especialidades_id` )
    REFERENCES `sigepa`.`especialidades` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_especialidades_has_profesionales_profesionales1`
    FOREIGN KEY (`profesionales_id` )
    REFERENCES `sigepa`.`profesionales` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `sigepa`.`horarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sigepa`.`horarios` ;

CREATE  TABLE IF NOT EXISTS `sigepa`.`horarios` (
  `centros_atencion_id` INT UNSIGNED NOT NULL ,
  `profesionales_id` INT UNSIGNED NOT NULL ,
  `dia` VARCHAR(45) NULL ,
  `horaDesde` VARCHAR(45) NULL ,
  `horaHasta` VARCHAR(45) NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`centros_atencion_id`, `profesionales_id`) ,
  INDEX `fk_centros_atencion_has_profesionales_profesionales1_idx` (`profesionales_id` ASC) ,
  INDEX `fk_centros_atencion_has_profesionales_centros_atencion1_idx` (`centros_atencion_id` ASC) ,
  CONSTRAINT `fk_centros_atencion_has_profesionales_centros_atencion1`
    FOREIGN KEY (`centros_atencion_id` )
    REFERENCES `sigepa`.`centros_atencion` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_centros_atencion_has_profesionales_profesionales1`
    FOREIGN KEY (`profesionales_id` )
    REFERENCES `sigepa`.`profesionales` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `sigepa`.`turnos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sigepa`.`turnos` ;

CREATE  TABLE IF NOT EXISTS `sigepa`.`turnos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `fechaHora` DATETIME NOT NULL ,
  `pacientes_id` INT(11) UNSIGNED NOT NULL ,
  `profesionales_id` INT UNSIGNED NOT NULL ,
  `especialidades_id` INT UNSIGNED NOT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  `estado` VARCHAR(45) NOT NULL DEFAULT 'asignado' ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_turnos_pacientes1_idx` (`pacientes_id` ASC) ,
  INDEX `fk_turnos_profesionales1_idx` (`profesionales_id` ASC) ,
  INDEX `fk_turnos_especialidades1_idx` (`especialidades_id` ASC) ,
  CONSTRAINT `fk_turnos_pacientes1`
    FOREIGN KEY (`pacientes_id` )
    REFERENCES `sigepa`.`pacientes` (`id` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_turnos_profesionales1`
    FOREIGN KEY (`profesionales_id` )
    REFERENCES `sigepa`.`profesionales` (`id` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_turnos_especialidades1`
    FOREIGN KEY (`especialidades_id` )
    REFERENCES `sigepa`.`especialidades` (`id` )
    ON DELETE CASCADE
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `sigepa`.`diagnosticos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sigepa`.`diagnosticos` ;

CREATE  TABLE IF NOT EXISTS `sigepa`.`diagnosticos` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `diagnostico_presuntivo` TEXT NOT NULL ,
  `diagnostico_definitivo` TEXT NULL ,
  `pacientes_id` INT(11) UNSIGNED NULL ,
  `patologias_id` INT(11) UNSIGNED NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_atenciones_pacientes_pacientes1_idx` (`pacientes_id` ASC) ,
  INDEX `fk_diagnosticos_patologias1_idx` (`patologias_id` ASC) ,
  CONSTRAINT `fk_atenciones_pacientes_pacientes1`
    FOREIGN KEY (`pacientes_id` )
    REFERENCES `sigepa`.`pacientes` (`id` )
    ON DELETE SET NULL
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_diagnosticos_patologias1`
    FOREIGN KEY (`patologias_id` )
    REFERENCES `sigepa`.`patologias` (`id` )
    ON DELETE SET NULL
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `sigepa`.`medicaciones_tratamientos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sigepa`.`medicaciones_tratamientos` ;

CREATE  TABLE IF NOT EXISTS `sigepa`.`medicaciones_tratamientos` (
  `id` INT UNSIGNED ZEROFILL NOT NULL ,
  `tratamientos_id` INT(11) UNSIGNED NOT NULL ,
  `cantidad` VARCHAR(45) NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_medicaciones_has_tratamientos_tratamientos1_idx` (`tratamientos_id` ASC) ,
  CONSTRAINT `fk_medicaciones_has_tratamientos_tratamientos1`
    FOREIGN KEY (`tratamientos_id` )
    REFERENCES `sigepa`.`tratamientos` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `sigepa`.`obras_sociales_profesionales`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sigepa`.`obras_sociales_profesionales` ;

CREATE  TABLE IF NOT EXISTS `sigepa`.`obras_sociales_profesionales` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `obras_sociales_id` INT UNSIGNED NOT NULL ,
  `profesionales_id` INT UNSIGNED NOT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_obras_sociales_has_profesionales_profesionales1_idx` (`profesionales_id` ASC) ,
  INDEX `fk_obras_sociales_has_profesionales_obras_sociales1_idx` (`obras_sociales_id` ASC) ,
  CONSTRAINT `fk_obras_sociales_has_profesionales_obras_sociales1`
    FOREIGN KEY (`obras_sociales_id` )
    REFERENCES `sigepa`.`obras_sociales` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_obras_sociales_has_profesionales_profesionales1`
    FOREIGN KEY (`profesionales_id` )
    REFERENCES `sigepa`.`profesionales` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `sigepa`.`licencias`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sigepa`.`licencias` ;

CREATE  TABLE IF NOT EXISTS `sigepa`.`licencias` (
  `centros_atencion_id` INT UNSIGNED NOT NULL ,
  `profesionales_id` INT UNSIGNED NOT NULL ,
  `fechaDesde` DATETIME NOT NULL ,
  `fechaHasta` DATETIME NOT NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  PRIMARY KEY (`centros_atencion_id`, `profesionales_id`) ,
  INDEX `fk_centros_atencion_has_profesionales1_profesionales1_idx` (`profesionales_id` ASC) ,
  INDEX `fk_centros_atencion_has_profesionales1_centros_atencion1_idx` (`centros_atencion_id` ASC) ,
  CONSTRAINT `fk_centros_atencion_has_profesionales1_centros_atencion1`
    FOREIGN KEY (`centros_atencion_id` )
    REFERENCES `sigepa`.`centros_atencion` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_centros_atencion_has_profesionales1_profesionales1`
    FOREIGN KEY (`profesionales_id` )
    REFERENCES `sigepa`.`profesionales` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `sigepa`.`patologias_tratamientos`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sigepa`.`patologias_tratamientos` ;

CREATE  TABLE IF NOT EXISTS `sigepa`.`patologias_tratamientos` (
  `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT ,
  `tratamientos_id` INT(11) UNSIGNED NOT NULL ,
  INDEX `fk_patologias_has_tratamientos_tratamientos1_idx` (`tratamientos_id` ASC) ,
  PRIMARY KEY (`id`) ,
  CONSTRAINT `fk_patologias_has_tratamientos_tratamientos1`
    FOREIGN KEY (`tratamientos_id` )
    REFERENCES `sigepa`.`tratamientos` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


-- -----------------------------------------------------
-- Table `sigepa`.`recetas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `sigepa`.`recetas` ;

CREATE  TABLE IF NOT EXISTS `sigepa`.`recetas` (
  `id` INT UNSIGNED NOT NULL AUTO_INCREMENT ,
  `pacientes_id` INT(11) UNSIGNED NULL ,
  `medicamentos_id` INT(11) UNSIGNED NULL ,
  `created` DATETIME NULL ,
  `modified` DATETIME NULL ,
  `observaciones` TEXT NULL ,
  PRIMARY KEY (`id`) ,
  INDEX `fk_recetas_pacientes1_idx` (`pacientes_id` ASC) ,
  INDEX `fk_recetas_medicamentos1_idx` (`medicamentos_id` ASC) ,
  CONSTRAINT `fk_recetas_pacientes1`
    FOREIGN KEY (`pacientes_id` )
    REFERENCES `sigepa`.`pacientes` (`id` )
    ON DELETE SET NULL
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_recetas_medicamentos1`
    FOREIGN KEY (`medicamentos_id` )
    REFERENCES `sigepa`.`medicamentos` (`id` )
    ON DELETE SET NULL
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

USE `sigepa` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
